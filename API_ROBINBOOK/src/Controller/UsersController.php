<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{   

      
    private $UsersRepository; 

    public function __construct(UsersRepository  $UsersRepository)
    {
        $this->UsersRepository = $UsersRepository; 
    }
        /**
     * @Route("/users", name="add_users",methods={"POST"})
     */
    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $date_of_birth = $data['date_of_birth'];
        $dni = $data['dni'];
        $email = $data['email'];
        $name = $data['name'];
        $release_date = $data['release_date'];
        $rol = $data['rol'];
        $surname = $data['surname'];
        $surname2 = $data['surname2'];

        
        $this ->UsersRepository->saveusers($data);
        return new JsonResponse(['status'=>'users created'], Response::HTTP_CREATED);

    }
    /**
     * @Route("/users/{id}", name="get_one_users", methods={"GET"})
     */
    public function get($id): JsonResponse

    {
        $users = $this->UsersRepository->findOneBy(['id'=>$id]);
            $data[] = [
                'date_of_birth'=> $users->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$users->getDni(),
                'email'=>$users->getEmail(),
                'name'=>$users->getName(),
                'release_date'=>$users->getReleaseDate()->format('d-m-Y'),
                'rol'=>$users->getRol(),
                'surname'=>$users->getSurname(),
                'surname2'=>$users->getSurname2(),
                
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/users/", name="get_all_users", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $userss = $this->UsersRepository->findAll();
        $data =[];

        foreach ($userss as $users) {
            $data[] = [
                'date_of_birth'=> $users->getDateOBirth()->format('d-m-Y'),
                'dni'=>$users->getDni(),
                'email'=>$users->getEmail(),
                'name'=>$users->getName(),
                'release_date'=>$users->getReleaseDate()->format('d-m-Y'),
                'rol'=>$users->getRol(),
                'surname'=>$users->getSurname(),
                'surname2'=>$users->getSurname2(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/users/{id}", name="update_users", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $users = $this->UsersRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['date_of_birth']) ? true : $users->getDateOfBirth($data['date_of_birth']);
        empty($data['dni']) ? true : $users->setDni($data['dni']);
        empty($data['email']) ? true : $users->setEmail($data['email']);
        empty($data['name']) ? true : $users->setName ($data['name']);
        empty($data['release_date']) ? true : $users->setReleaseDate($data['release_date']);
        empty($data['rol']) ? true : $users->setRol($data['rol']);
        empty($data['surname']) ? true : $users->setSurname($data['surname']);
        empty($data['surname2']) ? true : $users->setSurname2($data['surname2']);

        $updatedusers = $this->UsersRepository->updateusers($users);

        return new JsonRespponse(['status' => 'users updated!'], Response::HTTP_OK);
    }

    /**
     * @Route("/users/{id}", name="delete_users", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    
    {
        $users = $this->UsersRepository->findOneBy(['id' => $id]);

        $this->UsersRepository->removeusers($users);

        return new JsonResponse(['status'=> 'users delete'], Response::HTTP_OK);
    }

     /**
     * @Route("/users", name="users")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/UsersController.php',
        ]);
    }
}

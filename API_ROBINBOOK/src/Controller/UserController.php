<?php

namespace App\Controller;

use App\Repository\UserRepository;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{   

      
    private $UserRepository; 

    public function __construct(UserRepository  $UserRepository)
    {
        $this->UserRepository = $UserRepository; 
    }
        /**
     * @Route("/users", name="add_users",methods={"POST"})
     */
    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $name = $data['name'];
        $surname = $data['surname'];
        $surname2 = $data['surname2'];
        $date_of_birth = $data['date_of_birth'];
        $dni = $data['dni'];
        $email = $data['email'];
        $release_date = $data['release_date'];
        $password = $data['password'];
        $rol = $data['rol'];

        
        $this ->UserRepository->saveUser($data);
        return new JsonResponse(['status'=>'users created'], Response::HTTP_CREATED);

    }
    /**
     * @Route("/users/{id}", name="get_one_users", methods={"GET"})
     */
    public function get($id): JsonResponse

    {
        $user = $this->UserRepository->findOneBy(['id'=>$id]);
            $data[] = [

                'name'=>$user->getName(),
                'surname1'=>$user->getSurname1(),
                'surname2'=>$user->getSurname2(),
                'date_of_birth'=> $user->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$user->getDni(),
                'email'=>$user->getEmail(),
                'release_date'=>$user->getReleaseDate()->format('d-m-Y'),
                'password'=>$user->getPassword(),
                'rol'=>$user->getRol(),
                
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/prueba", name="prueba", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $users = $this->UserRepository->findAll();
        $data =[];

        foreach ($users as $user) {
            $data[] = [
                'name'=>$user->getName(),
                'surname1'=>$user->getSurname1(),
                'surname2'=>$user->getSurname2(),
                'date_of_birth'=> $user->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$user->getDni(),
                'email'=>$user->getEmail(),
                'release_date'=>$user->getReleaseDate()->format('d-m-Y'),
                'password'=>$user->getPassword(),
                'rol'=>$user->getRol(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/2/users/{id}", name="update_users", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $user = $this->UserRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['name']) ? true : $user->setName ($data['name']);
        empty($data['surname1']) ? true : $user->setSurname($data['surname1']);
        empty($data['surname2']) ? true : $user->setSurname2($data['surname2']);
        empty($data['date_of_birth']) ? true : $user->setDateOfBirth($data['date_of_birth']);
        empty($data['dni']) ? true : $user->setDni($data['dni']);
        empty($data['email']) ? true : $user->setEmail($data['email']);
        empty($data['release_date']) ? true : $user->setReleaseDate($data['release_date']);
        empty($data['password']) ? true : $user->setPassword($data['password']);
        empty($data['rol']) ? true : $user->setRol($data['rol']);
        

        $updateduser = $this->UserRepository->updateUser($user);

        return new JsonRespponse(['status' => 'users updated!'], Response::HTTP_OK);
    }

    /**
     * @Route("/2/users/{id}", name="delete_users", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    
    {
        $user = $this->UserRepository->findOneBy(['id' => $id]);

        $this->UserRepository->removeUser($user);

        return new JsonResponse(['status'=> 'users delete'], Response::HTTP_OK);
    }

}

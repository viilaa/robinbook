<?php

namespace App\Controller;

use App\Entity\User;
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
     * @Route("/users", name="add_user",methods={"POST"})
     */
    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    
        $this ->UserRepository->saveuser($data);
        return new JsonResponse(['status'=>'user created'], Response::HTTP_CREATED);

    }
    /**
     * @Route("/users/{id}", name="get_one_user", methods={"GET"})
     */
    public function get($id): JsonResponse

    {
        $user = $this->UserRepository->findOneBy(['id'=>$id]);
            $data[] = [

                'id'=>$user->getId(),
                'username'=>$user->getUsername(),
                'name'=>$user->getName(),
                'surname1'=>$user->getSurname1(),
                'surname2'=>$user->getSurname2(),
                'date_of_birth'=> $user->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$user->getDni(),
                'email'=>$user->getEmail(),
                'release_date'=>$user->getReleaseDate()->format('d-m-Y'),
                'password'=>$user->getPassword(),
                'roles'=>$user->getRoles(),
                
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/users/", name="get_all_user", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $users = $this->UserRepository->findAll();
        $data =[];

        foreach ($users as $user) {
            $data[] = [
                'id'=>$user->getId(),
                'username'=>$user->getUsername(),
                'name'=>$user->getName(),
                'surname1'=>$user->getSurname1(),
                'surname2'=>$user->getSurname2(),
                'date_of_birth'=> $user->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$user->getDni(),
                'email'=>$user->getEmail(),
                'release_date'=>$user->getReleaseDate()->format('d-m-Y'),
                'password'=>$user->getPassword(),
                'roles'=>$user->getRoles(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/users/{id}", name="update_user", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $user = $this->UserRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);
        
        empty($data['username']) ? true : $user->setUsername ($data['username']);
        empty($data['name']) ? true : $user->setName ($data['name']);
        empty($data['surname1']) ? true : $user->setSurname1($data['surname1']);
        empty($data['surname2']) ? true : $user->setSurname2($data['surname2']);
        empty($data['date_of_birth']) ? true : $user->setDateOfBirth($data['date_of_birth']);
        empty($data['dni']) ? true : $user->setDni($data['dni']);
        empty($data['email']) ? true : $user->setEmail($data['email']);
        empty($data['release_date']) ? true : $user->setReleaseDate($data['release_date']); 
        empty($data['password']) ? true : $user->setPassword($data['password'] = password_hash($data['password'], PASSWORD_DEFAULT));
        empty($data['roles']) ? true : $user->setRoles($data['roles']);
        

        $updateduser = $this->UserRepository->updateuser($user);

        return new JsonResponse(['status' => 'user updated!'], Response::HTTP_OK);
    }

    /**
     * @Route("/users/{id}", name="delete_user", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    
    {
        $user = $this->UserRepository->findOneBy(['id' => $id]);

        $this->UserRepository->removeuser($user);

        return new JsonResponse(['status'=> 'user delete'], Response::HTTP_OK);
    }

      /**
     * @Route("/findbookRead/{BookRead}", name="get_all_findbookRead", methods={"GET"})
     */
    public function findByRead($BookRead): JsonResponse

    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($BookRead);
        $data =[];

        $relations = $user->getBook();
        $relation=[];
        foreach ($relations as $rel) {
            array_push($relation,[ 
                 'id'=> $rel->getId(),
                'cover_page'=>$rel->getCoverPage(),
                ]);
        }
        array_push($data,[ 
            'id'=> $user->getId(),
            'name'=>$user->getName(),
            'books'=>$relation
        ]);

        return new JsonResponse($relation, Response::HTTP_OK);
    }

}

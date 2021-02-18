<?php

namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
/* use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; */


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
    public function add(Request $request/* ,UserPasswordEncoderInterface $encoder, UserInterface $user */): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        /* $name = $data['name'];
        $surname1 = $data['surname1'];
        $surname2 = $data['surname2'];
        $date_of_birth = $data['date_of_birth'];
        $dni = $data['dni'];
        $email = $data['email'];
        $release_date = $data['release_date'];
        $password = $data['password'];
        $rol = $data['rol'];  

        $data['password']=$passwordEncoder->encodePassword($user, $data['password']);*/
        /* $user = new Users(); 
        $plainPassword = $data['password'];
        $encoded = $encoder->encodePassword($user, $plainPassword);

        $user->setPassword($encoded); */
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    
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

                'name'=>$users->getName(),
                'surname1'=>$users->getSurname1(),
                'surname2'=>$users->getSurname2(),
                'date_of_birth'=> $users->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$users->getDni(),
                'email'=>$users->getEmail(),
                'release_date'=>$users->getReleaseDate()->format('d-m-Y'),
                'password'=>$users->getPassword(),
                'rol'=>$users->getRol(),
                
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
                'name'=>$users->getName(),
                'surname1'=>$users->getSurname1(),
                'surname2'=>$users->getSurname2(),
                'date_of_birth'=> $users->getDateOfBirth()->format('d-m-Y'),
                'dni'=>$users->getDni(),
                'email'=>$users->getEmail(),
                'release_date'=>$users->getReleaseDate()->format('d-m-Y'),
                'password'=>$users->getPassword(),
                'rol'=>$users->getRol(),
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
        

        empty($data['name']) ? true : $users->setName ($data['name']);
        empty($data['surname1']) ? true : $users->setSurname1($data['surname1']);
        empty($data['surname2']) ? true : $users->setSurname2($data['surname2']);
        empty($data['date_of_birth']) ? true : $users->setDateOfBirth($data['date_of_birth']);
        empty($data['dni']) ? true : $users->setDni($data['dni']);
        empty($data['email']) ? true : $users->setEmail($data['email']);
        empty($data['release_date']) ? true : $users->setReleaseDate($data['release_date']); 
        empty($data['password']) ? true : $users->setPassword($data['password'] = password_hash($data['password'], PASSWORD_DEFAULT));
        empty($data['rol']) ? true : $users->setRol($data['rol']);
        

        $updatedusers = $this->UsersRepository->updateusers($users);

        return new JsonResponse(['status' => 'users updated!'], Response::HTTP_OK);
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
     * @Route("/findbookRead/{BookRead}", name="get_all_findbookRead", methods={"GET"})
     */
    public function findByRead($BookRead): JsonResponse

    {
        $users = $this->getDoctrine()->getRepository(Users::class)->find($BookRead);
        $data =[];

        $relations = $users->getBook();
        $relation=[];
        foreach ($relations as $rel) {
            array_push($relation,[ 
                 'id'=> $rel->getId(),
                'cover_page'=>$rel->getCoverPage(),
                ]);
        }
        array_push($data,[ 
            'id'=> $users->getId(),
            'name'=>$users->getName(),
            'books'=>$relation
        ]);

        return new JsonResponse($relation, Response::HTTP_OK);
    }

}

<?php

// src/Controller/SecurityController.php
namespace App\Controller;

// ...
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $data=json_decode($request->getContent(), true);;
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        $userss = $this->UsersRepository->findAll();
        $data =[];

        /* foreach ($userss as $users) {
            if (password_verify($users->getPassword(), $data['password']) {
                new JsonResponse(['status'=>'Logged Succesfull'], Response::HTTP_OK);
            } else {
                return new JsonResponse(['status'=>'Login error'], Response::HTTP_OK);
            }
            
                
            ];
        } */
        
    }
}

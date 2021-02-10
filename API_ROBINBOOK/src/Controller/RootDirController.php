<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RootDirController extends AbstractController
{
    /**
     * @Route("/root/dir", name="root_dir")
     */
    public function index(): Response
    {
          return $Dir = $this->container->getparameter('kernel.root_dir');
        /* return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/RootDirController.php',
        ]);*/
    }
}

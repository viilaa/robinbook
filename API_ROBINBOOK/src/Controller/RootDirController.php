<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;


class RootDirController extends AbstractController
{
    /**
     * @Route("/root/dir", name="root_dir")
     */
    public function index(): Response
    { 
      
        return $this->json([
            'message' => $this->getParameter('kernel.project_dir').'/../pdf',
            'path' => 'src/Controller/RootDirController.php',
        ]);
    }
}

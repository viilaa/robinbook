<?php

namespace App\Controller;

use App\Entity\Book; 
use App\Repository\BookRepository; 
use App\Form\BookType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class BookController extends AbstractController
{       
     private $BookRepository; 

    public function __construct(BookRepository  $BookRepository)
    {
         $this->BookRepository = $BookRepository; 
    }
    /**
     * @Route("/book", name="add_book",methods={"POST"})
     */
    
    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $this ->BookRepository->savebook($data);
        return new JsonResponse(['status'=>'book created'], Response::HTTP_CREATED);

    } 
    /**
     * @Route("/book/{id}", name="get_one_book", methods={"GET"})
     */
    public function get($id): JsonResponse

    {
        $book = $this->BookRepository->findOneBy(['id'=>$id]);
            $data[] = [
                'age_classification'=> $book->getAgeClassification(),
                'Cover_page'=>$book->getCoverPage(),
                'illustrations'=>$book->getIllustrations(),
                'pdf'=>$book->getPdf(),
                'release_date'=>$book->getReleaseDate()->format('d-m-Y'),
                'synopsis'=>$book->getSynopsis(),
                'title'=>$book->getTitle(),
                
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/books", name="get_all_book", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $books = $this->BookRepository->findAll();
        $data =[];

        foreach ($books as $book) {
            $data[] = [
                'age_classification'=> $book->getAgeClassification(),
                'cover_page'=>$book->getCoverPage(),
                'illustrations'=>$book->getIllustrations(),
                'pdf'=>$book->getPdf(),
                'release_date'=>$book->getReleaseDate()->format('d-m-Y'),
                'synopsis'=>$book->getSynopsis(),
                'title'=>$book->getTitle(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/book/{id}", name="update_book", methods={"POST"})
     */
    public function update($id, Request $request,SluggerInterface $slugger): JsonResponse
    {
        $book = $this->BookRepository->findOneBy(['id' => $id]);
        $form = $this->createForm(BookType::class, $book );
        $form->handleRequest($request); 
        
         $respuesta ="";

        if($form->isSubmitted())
        {
            $brochureFile = $form->get('upload')->getData(); 

            if ($brochureFile) 
            {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                    $respuesta = "Fichero subido con exito";
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    $respuesta = $e->getMessage();;
                }

                $book->setPdf($newFilename);
                $book->setReleaseDate(\DateTime::createFromFormat('Y-m-d',date('Y-m-d')));  
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($book);
                $entityManager->flush();

            }  
        
            return new JsonResponse([$respuesta], Response::HTTP_OK);
        } 
        return new JsonResponse([$respuesta], Response::HTTP_OK);

    }  

    /**
     * @Route("/book/{id}", name="delete_book", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    
    {
        $book = $this->BookRepository->findOneBy(['id' => $id]);

        $this->BookRepository->removebook($book);

        return new JsonResponse(['status'=> 'book delete'], Response::HTTP_OK);
    }

    /**
     * @Route("/book/new", name="add_book_new", methods={"POST"})
     */
    public function newAction(Request $request,SluggerInterface $slugger): JsonResponse
    {
        $newBook = new Book();
        $form = $this->createForm(BookType::class, $newBook );
        $form->handleRequest($request); 
        
        /* $respuesta = $form->isSubmitted(). "-" . $form->isValid(); */

        if($form->isSubmitted())
        {
            $brochureFile = $form->get('upload')->getData(); 

            if ($brochureFile) 
            {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                    $respuesta = "Fichero subido con exito";
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    $respuesta = $e->getMessage();;
                }

                $newBook->setPdf($newFilename);
                $newBook->setReleaseDate(\DateTime::createFromFormat('Y-m-d',date('Y-m-d')));  
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($newBook);
                $entityManager->flush();

            }  
        
            return new JsonResponse([$respuesta], Response::HTTP_OK);
        } 
        return new JsonResponse([$respuesta], Response::HTTP_OK);
    }
    


       
    /**
     * @Route("/findBooks/{word}", name="get_all_findBooks", methods={"GET"})
     */
    public function findBySearch($word): JsonResponse

    {
        $books = $this->BookRepository->findBySearch($word);
        $data =[];

        foreach ($books as $book) {
            $data[] = [
                'age_classification'=> $book->getAgeClassification(),
                'cover_page'=>$book->getCoverPage(),
                'illustrations'=>$book->getIllustrations(),
                'pdf'=>$book->getPdf(),
                'release_date'=>$book->getReleaseDate()->format('d-m-Y'),
                'synopsis'=>$book->getSynopsis(),
                'title'=>$book->getTitle(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
   
}
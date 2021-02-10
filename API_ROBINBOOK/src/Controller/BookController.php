<?php

namespace App\Controller;

use App\Entity\Book; 
use App\Repository\BookRepository; 
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

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

        $age_classification = $data['age_classification'];
        $cover_page = $data['cover_page'];
        $illustrations = $data['illustrations'];
        $pdf = $data['pdf'];
        $release_date = $data['release_date'];
        $synopsis = $data['synopsis'];
        $title = $data['title'];

        
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
     * @Route("/book", name="get_all_book", methods={"GET"})
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
     * @Route("/book/{id}", name="update_book", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $book = $this->BookRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['age_classification']) ? true : $book-> getAgeClassification($data['age_classification']);
        empty($data['cover_page']) ? true : $book->setCoverPage($data['cover_page']);
        empty($data['illustrations']) ? true : $book->setIllustrations ($data['illustrations']);
        empty($data['pdf']) ? true : $book->setPdf($data['pdf']);
        empty($data['release_date']) ? true : $book->setReleaseDate($data['release_date']);
        empty($data['title']) ? true : $book->setTitle($data['title']);

        $updatedbook = $this->BookRepository->updatebook($book);

        return new JsonRespponse(['status' => 'book updated!'], Response::HTTP_OK);
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
     * @Route("/book/new", name="add_new_pdf")
     */
    public function newAction(Request $request)
    {
        $newFile = new File();
        $form = $this->createForm(BookType::class, $newFile);
        $form->handleRequest($request);

        if($form->isValid())
        {
            // La variable $file guardará el PDF subido
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $Pdf = $newFile->getPdf();
            $CoverPage = $newFile->getCoverPage();

            // Generar un nombre único para el archivo antes de guardarlo
            $PdfName = md5(uniqid()).'.'.$Pdf->guessExtension();
            $CoverPageName = md5(uniqid()).'.'.$CoverPage->guessExtension();

            // Mover el archivo al directorio donde se guardan los pdfs
            $PdfDir = $this->getParameter('kernel.project_dir').'/../pdf';
            $Pdf->move($PdfDir, $PdfName);
            $CoverPageDir = $this->getParameter('kernel.project_dir').'/../coverPage';
            $CoverPage->move($CoverPageDir, $CoverPageName);

             // Actualizar la propiedad pdf para guardar el nombre de archivo PDF
            // en lugar de sus contenidos
            $newFile->setPdf($PdfName);
            $newFile->setCoverPage($CoverPageName);

            // ... persist la variable $usuario o cualquier otra tarea

            return $this->redirect($this->generateUrl('app_product_list'));
        }
    } 

}

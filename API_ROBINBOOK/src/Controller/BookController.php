<?php

namespace App\Controller;

/* use App\Repository\BookRepository; */
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;;

class BookController extends AbstractController
{       
    /* private $BookRepository; 

    public function __construct)
    {
        /* $this->BookRepository = $BookRepository; 
    }*/
        /**
     * @Route("/book", name="add_book",methods={"POST"})
     */
    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $age_classification = $data['age_classification'];
        $book_id = $data['book_id'];
        $cover_page = $data['cover_page'];
        $illustrations = $data['illustrations'];
        $pdf = $data['pdf'];
        $release_date = $data['release_date'];
        $synopsis = $data['synopsis'];
        $title = $data['title'];
        $user_id = $data['user_id'];

        
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
                'age_classification'=> $book->getAge_classification(),
                'book_id'=>$book->getBook_id(),
                'Cover_page'=>$book->getCover_page(),
                'illustrations'=>$book->getIllustrations(),
                'pdf'=>$book->getPdf(),
                'release_date'=>$book->getRelease_date(),
                'synopsis'=>$book->getSynopsis(),
                'title'=>$book->getTitle(),
                'user_id'=>$book->getUser_id(),
                
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/book/", name="get_all_book", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $books = $this->BookRepository->findAll();
        $data =[];

        foreach ($books as $book) {
            $data[] = [
                'age_classification'=> $book->getAge_classification(),
                'book_id'=>$book->getBook_id(),
                'Cover_page'=>$book->getCover_page(),
                'illustrations'=>$book->getIllustrations(),
                'pdf'=>$book->getPdf(),
                'release_date'=>$book->getRelease_date(),
                'synopsis'=>$book->getSynopsis(),
                'title'=>$book->getTitle(),
                'user_id'=>$book->getUser_id(),
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

        empty($data['age_classification']) ? true : $book->getAge_classification($data['age_classification']);
        empty($data['book_id']) ? true : $book->setBook_id($data['book_id']);
        empty($data['cover_page']) ? true : $book->setCover_page($data['cover_page']);
        empty($data['illustrations']) ? true : $book->setIllustrations ($data['illustrations']);
        empty($data['pdf']) ? true : $book->setPdf($data['pdf']);
        empty($data['release_date']) ? true : $book->setRelease_date($data['release_date']);
        empty($data['title']) ? true : $book->setTitle($data['title']);
        empty($data['user_id']) ? true : $book->setUser_id($data['user_id']);

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
     * @Route("/book", name="book")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BookController.php',
        ]);
    }
}

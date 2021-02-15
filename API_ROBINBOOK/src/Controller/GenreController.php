<?php

namespace App\Controller;
use App\Entity\Genre;
use App\Repository\GenreRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends AbstractController
{   
    private $GenreRepository; 

    public function __construct(GenreRepository $GenreRepository)
    {
        $this->GenreRepository = $GenreRepository; 
    }
    /**
     * @Route("/Genre", name="add_Genre",methods={"POST"})
     */

    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $type_genre = $data['type_genre'];
        

        
        $this ->GenreRepository->saveGenre($data);
        return new JsonResponse(['status'=>'genre created'], Response::HTTP_CREATED);

    }
    /**
     * @Route("/genre/{id}", name="get_one_genre", methods={"GET"})
     */
    public function get($id): JsonResponse

    {
        $genre = $this->GenreRepository->findOneBy(['id'=>$id]);
            $data[] = [
                'id'=> $genre->getId(),
                'type_genre'=>$genre->getTypegenre(),
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/genre", name="get_all_genre", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $genres = $this->GenreRepository->findAll();
        $data =[];

        foreach ($genres as $genre) {
            $data[] = [
                'id'=> $genre->getId(),
                'type_genre'=>$genre->getTypegenre(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/genre/{id}", name="update_genre", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $genre = $this->GenreRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['type_genre']) ? true : $genre->setTypegenre($data['type_genre']);

        $updatedgenre = $this->GenreRepository->updategenre($genre);

        return new JsonRespponse(['status' => 'genre updated!'], Response::HTTP_OK);
    }

    /**
     * @Route("/genre/{id}", name="delete_genre", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    
    {
        $genre = $this->GenreRepository->findOneBy(['id' => $id]);

        $this->GenreRepository->removegenre($genre);

        return new JsonResponse(['status'=> 'genre delete'], Response::HTTP_OK);
    }
      /**
     * @Route("/findGenres/{TypeGenre}", name="get_all_findGenres", methods={"GET"})
     */
    public function findByGenre($TypeGenre): JsonResponse

    {
        $genre = $this->getDoctrine()->getRepository(Genre::class)->find($TypeGenre);
        $data =[];

        $relations = $genre->getBooks();
        $relation=[];
        foreach ($relations as $rel) {
            array_push($relation,[ 
                 'id'=> $rel->getId(),
                'title'=>$rel->getTitle() 
                ]);
        }
        array_push($data,[ 
            'id'=> $genre->getId(),
            'type_genre'=>$genre->getTypeGenre(),
            'books'=>$relation
        ]);

        return new JsonResponse($relation, Response::HTTP_OK);
    }
   
  
   /**
     * @Route("/genre", name="genre")
     */
   /* public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/GenreController.php',
        ]);
    } */
}
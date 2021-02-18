<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;



class ContactController extends AbstractController
{   

      
    private $ContactRepository; 

    public function __construct(ContactRepository  $ContactRepository)
    {
        $this->ContactRepository = $ContactRepository; 
    }
        /**
     * @Route("/contact", name="add_Contact",methods={"POST"})
     */
    public function add(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);
    
        $this ->ContactRepository->saveContact($data);
        return new JsonResponse(['status'=>'Contact created'], Response::HTTP_CREATED);

    }
    /**
     * @Route("/contact/{id}", name="get_one_Contact", methods={"GET"})
     */
    public function get($id): JsonResponse

    {
        $Contact = $this->ContactRepository->findOneBy(['id'=>$id]);
            $data[] = [

                'id'=>$Contact->getId(),
                'name'=>$Contact->getName(),
                'surname1'=>$Contact->getSurname1(),
                'surname2'=>$Contact->getSurname2(),
                'email'=>$Contact->getEmail(),
                'message'=>$Contact->getMessage(),
                
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/contacts/", name="get_all_Contact", methods={"GET"})
     */
    public function getAll(): JsonResponse

    {
        $Contacts = $this->ContactRepository->findAll();
        $data =[];

        foreach ($Contacts as $Contact) {
            $data[] = [
                'id'=>$Contact->getId(),
                'name'=>$Contact->getName(),
                'surname1'=>$Contact->getSurname1(),
                'surname2'=>$Contact->getSurname2(),
                'email'=>$Contact->getEmail(),
                'message'=>$Contact->getMessage(),
                
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/contact/{id}", name="update_Contact", methods={"PUT"})
     */
    public function update($id, Request $request): JsonResponse
    {
        $Contact = $this->ContactRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);
        

        empty($data['name']) ? true : $Contact->setName ($data['name']);
        empty($data['surname1']) ? true : $Contact->setSurname1($data['surname1']);
        empty($data['surname2']) ? true : $Contact->setSurname2($data['surname2']);
        empty($data['email']) ? true : $Contact->setEmail($data['email']);
        empty($data['message']) ? true : $Contact->setMessage($data['message']);
        

        $updatedContact = $this->ContactRepository->updateContact($Contact);

        return new JsonResponse(['status' => 'Contact updated!'], Response::HTTP_OK);
    }

    /**
     * @Route("/contact/{id}", name="delete_Contact", methods={"DELETE"})
     */
    public function delete($id): JsonResponse
    
    {
        $Contact = $this->ContactRepository->findOneBy(['id' => $id]);

        $this->ContactRepository->removeContact($Contact);

        return new JsonResponse(['status'=> 'Contact delete'], Response::HTTP_OK);
    }
}

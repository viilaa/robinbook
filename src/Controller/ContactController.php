<?php

namespace App\Controller;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    private $ContactRepository;

    public function __construct(ContactRepository $ContactRepository)
    {
        $this->ContactRepository = $ContactRepository;
    }
    /**
     * @Route("/contact", name="add_contact", methods={"POST"})
     */
    public function addContact(Request $request): JsonResponse

    {
        $data=json_decode($request->getContent(), true);

        $email = $data['email'];
        $message = $data['message'];
        
        $this ->ContactRepository->saveContact($email, $message);
        return new JsonResponse(['status'=>'Contact creado!'], Response::HTTP_CREATED);
    }
     /**
     * @Route("/contact/{id}", name="get_one_contact", methods={"GET"})
     */
    public function getContact($id): JsonResponse

    {
        $contact = $this->ContactRepository->findOneBy(['id'=>$id]);
            $data = [
                'id'=> $contact->getId(),
                'email'=> $contact->getEmail(),
                'message'=>$contact->getMessage(),
            ];

            return new JsonResponse($data, Response::HTTP_OK);
    }
    /**
     * @Route("/contacts", name="get_all_contacts", methods={"GET"})
     */
    public function getAll(): JsonResponse
    {
        $contacts = $this->ContactRepository->findAll();
        $data =[];

        foreach ($contacts as $contact) {
            $data[] = [
                'id'=> $contact->getId(),
                'email'=> $contact->getEmail(),
                'message'=>$contact->getMessage(),
            ];
        }

        return new JsonResponse($data, Response::HTTP_OK);
    }
     /**
     * @Route("/contact/{id}", name="update_contact", methods={"PUT"})
     */
    public function updateContact($id, Request $request): JsonResponse
    {
        $contact = $this->ContactRepository->findOneBy(['id' => $id]);
        $data = json_decode($request->getContent(), true);

        empty($data['id']) ? true : $contact->setContact($data['id']);
        empty($data['email']) ? true : $contact->setContact($data['email']);
        empty($data['message']) ? true : $contact->setContact($data['message']);

        $updatedContact = $this->ContactRepository->updateContact($contact);

        return new JsonResponse(['status' => 'Contact actualizado!'], Response::HTTP_OK);
    }
     /**
     * @Route("/contact/{id}", name="delete_contact", methods={"DELETE"})
     */
    public function deleteContact($id): JsonResponse
    
    {
        $contact = $this->ContactRepository->findOneBy(['id' => $id]);

        $this->ContactRepository->removeContact($contact);

        return new JsonResponse(['status'=> 'Contact eliminado!'], Response::HTTP_OK);
    }

}
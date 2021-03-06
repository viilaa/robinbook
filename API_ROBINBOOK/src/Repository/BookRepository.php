<?php

namespace App\Repository;

use App\Entity\Book;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Book|null find($id, $lockMode = null, $lockVersion = null)
 * @method Book|null findOneBy(array $criteria, array $orderBy = null)
 * @method Book[]    findAll()
 * @method Book[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BookRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,EntityManagerInterface $manager)
    {
        parent::__construct($registry, Book::class);
        $this->manager= $manager;
    }
    public function saveBook($data)    

    {
         $newBook = new Book();

        $newBook
             ->setTitle($data['title'])
             ->setSynopsis($data['synopsis'])
             ->setAgeClassification($data['age_classification'])
             ->setIllustrations($data['illustrations'])
             ->setPdf($data['pdf'])
             ->setReleaseDate(\DateTime::createFromFormat('Y-m-d', $data['release_date'])) 
             ->setCoverPage($data['cover_page']);
                

        $this->manager->persist($newBook);
        $this->manager->flush();
       
    }  

    public function updateBook(Book $Book):Book
    
    {
        $this->manager->remove($Book);
        $this->manager->flush();

        return $Book;
       
    } 

    public function removeBook(Book $Book):Book
    
    {
        $this->manager->remove($Book);
        $this->manager->flush();

        return $Book;
    }

    public function findBySearch($word)
        {
            return  $this->getEntityManager()
            ->createQuery(
                'SELECT b 
                FROM App\Entity\Book b 
                WHERE b.title 
                LIKE :title'
            )
            ->setParameter('title','%'.$word.'%')
            ->getResult();
       
        }

}

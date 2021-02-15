<?php

namespace App\Repository;

use App\Entity\Genre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Genre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Genre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Genre[]    findAll()
 * @method Genre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,EntityManagerInterface $manager)
    {
        parent::__construct($registry, Genre::class);
        $this->manager= $manager;
    }
    public function saveGenre($data)    

    {
         $newGenre = new Genre();

        $newGenre
                ->setTypeGenre = ($type_genre);

        $this->manager->persist($newGenre);
        $this->manager->flush();

    }  

    public function updateGenre(Genre $Genre):Genre
    
    {
        $this->manager>persist($Genre);
        $this->manager->flush();

        return $Genre;
    } 

    public function removeGenre(Genre $Genre):Genre
    
    {
        $this->manager->remove($Genre);
        $this->manager->flush();

        return $Genre;
    }

    public function findByGenre($TypeGenre)
        {
            return  $this->getEntityManager()
            ->createQuery(
                'SELECT b 
                FROM App\Entity\book b 
                INNER JOIN App\Entity\genre g'
            );
       
        }

    // /**
    //  * @return Genre[] Returns an array of Genre objects
    //  */
    
    
}

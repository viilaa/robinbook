<?php

namespace App\Repository;

use App\Entity\Users;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Users|null find($id, $lockMode = null, $lockVersion = null)
 * @method Users|null findOneBy(array $criteria, array $orderBy = null)
 * @method Users[]    findAll()
 * @method Users[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,EntityManagerInterface $manager)
    {
        parent::__construct($registry, Users::class);
        $this->manager= $manager;
    }
    public function saveUsers($data)    

    {
         $newUsers = new Users();

        $newUsers
            ->setName($data['name'])
            ->setSurname1($data['surname1'])
            ->setSurname2($data['surname2'])
            ->setDni($data['dni'])
            ->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data['date_of_birth']))
            ->setEmail($data['email'])
            ->setReleaseDate(\DateTime::createFromFormat('Y-m-d', $data['release_date']))
            ->setPassword($data['password']);

        $this->manager->persist($newUsers);
        $this->manager->flush();

    }  
      /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    }

    public function updateUsers(Users $Users):Users
    
    {
        $this->manager>persist($Users);
        $this->manager->flush();

        return $Users;
    } 

    public function removeUsers(Users $Users):Users
    
    {
        $this->manager->remove($Users);
        $this->manager->flush();

        return $Users;
    }

    public function findByRead($BookRead)
    {
        return  $this->getEntityManager()
        ->createQuery(
            'SELECT b 
            FROM App\Entity\book b 
            INNER JOIN App\Entity\users u
            ON b.id=u.id'
        );
   
    }

    // /**
    //  * @return Users[] Returns an array of Users objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Users
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

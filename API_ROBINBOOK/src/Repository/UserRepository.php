<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;


/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry,EntityManagerInterface $manager)
    {
        parent::__construct($registry, User::class);
        $this->manager= $manager;
        
    }
    public function saveUser($data)    

    {
         $newUser = new User();
   
        $newUser
            ->setUsername($data['username'])
            ->setName($data['name'])
            ->setSurname1($data['surname1'])
            ->setSurname2($data['surname2'])
            ->setDni($data['dni'])
            ->setDateOfBirth(\DateTime::createFromFormat('Y-m-d', $data['date_of_birth']))
            ->setEmail($data['email'])
            ->setReleaseDate(\DateTime::createFromFormat('Y-m-d', $data['release_date']))
            ->setPassword( $data['password']);

        $this->manager->persist($newUser);
        $this->manager->flush();

    }  
      /**
     * Used to upgrade (rehash) the user's password automatically over time.($this->passwordEncoder->encodePassword($user,)$this->passwordEncoder=$passwordEncoder;UserPasswordEncoderInterface  $passwordEncoder
     */
    /* public function upgradePassword(UserInterface $user, string $newEncodedPassword): void
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        $user->setPassword($newEncodedPassword);
        $this->_em->persist($user);
        $this->_em->flush();
    } */

    public function updateUser(User $User):User
    
    {

        $this->manager->persist($User);
        $this->manager->flush();

        return $User;
    } 

    public function removeUser(User $User):User
    
    {
        $this->manager->remove($User);
        $this->manager->flush();

        return $User;
    }

    public function findByRead($BookRead)
    {
        return  $this->getEntityManager()
        ->createQuery(
            'SELECT b 
            FROM App\Entity\book b 
            INNER JOIN  user_book c
            ON b.id=c.id
            INNER JOIN App\Entity\user u 
            ON c.id=u.id'
        );
    }

        public function AddBookRead($BookRead)
    {
        return  $this->getEntityManager()
        ->createQuery(
            'SELECT b 
            FROM App\Entity\book b 
            INNER JOIN  user_book c
            ON b.id=c.id
            INNER JOIN App\Entity\user u 
            ON c.id=u.id'
        );
   
    }

    // /**
    //  * @return User[] Returns an array of User objects
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
    public function findOneBySomeField($value): ?User
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

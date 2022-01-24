<?php

namespace App\Repository;

use App\Entity\UserCart;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UserCart|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserCart|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserCart[]    findAll()
 * @method UserCart[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserCartRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UserCart::class);
    }

    // /**
    //  * @return UserCart[] Returns an array of UserCart objects
    //  */
    // find multi result
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
    // find one field
    public function findOneBySomeField($value): ?UserCart
    {
        try {
            return $this->createQueryBuilder('u')
                ->andWhere('u.exampleField = :val')
                ->setParameter('val', $value)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e) {
            return false;
        }
    }

}

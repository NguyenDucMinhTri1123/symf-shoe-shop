<?php

namespace App\Repository;

use App\Entity\Bill_log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Bill_log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bill_log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bill_log[]    findAll()
 * @method Bill_log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class Bill_logRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bill_log::class);
    }

    public function addOneBill(){

    }

    // /**
    //  * @return Bill_log[] Returns an array of Bill_log objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Bill_log
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

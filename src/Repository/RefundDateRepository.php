<?php

namespace App\Repository;

use App\Entity\RefundDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RefundDate>
 *
 * @method RefundDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefundDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefundDate[]    findAll()
 * @method RefundDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefundDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefundDate::class);
    }

//    /**
//     * @return RefundDate[] Returns an array of RefundDate objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RefundDate
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

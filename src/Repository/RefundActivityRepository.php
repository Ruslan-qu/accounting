<?php

namespace App\Repository;

use App\Entity\RefundActivity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RefundActivity>
 *
 * @method RefundActivity|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefundActivity|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefundActivity[]    findAll()
 * @method RefundActivity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefundActivityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefundActivity::class);
    }

//    /**
//     * @return RefundActivity[] Returns an array of RefundActivity objects
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

//    public function findOneBySomeField($value): ?RefundActivity
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\SearchInvoice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SearchInvoice>
 *
 * @method SearchInvoice|null find($id, $lockMode = null, $lockVersion = null)
 * @method SearchInvoice|null findOneBy(array $criteria, array $orderBy = null)
 * @method SearchInvoice[]    findAll()
 * @method SearchInvoice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SearchInvoiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SearchInvoice::class);
    }

//    /**
//     * @return SearchInvoice[] Returns an array of SearchInvoice objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?SearchInvoice
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

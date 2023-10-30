<?php

namespace App\Repository;

use App\Entity\Axles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Axles>
 *
 * @method Axles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Axles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Axles[]    findAll()
 * @method Axles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AxlesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Axles::class);
    }

//    /**
//     * @return Axles[] Returns an array of Axles objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Axles
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

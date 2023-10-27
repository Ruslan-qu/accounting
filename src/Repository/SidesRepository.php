<?php

namespace App\Repository;

use App\Entity\Sides;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sides>
 *
 * @method Sides|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sides|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sides[]    findAll()
 * @method Sides[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SidesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sides::class);
    }

    //    /**
    //     * @return Sides[] Returns an array of Sides objects
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

    //    public function findOneBySomeField($value): ?Sides
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

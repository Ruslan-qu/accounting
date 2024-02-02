<?php

namespace App\Repository\RepositoryPartNo;

use App\Entity\EntitiesPartNo\Bodies;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Bodies>
 *
 * @method Bodies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bodies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bodies[]    findAll()
 * @method Bodies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BodiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bodies::class);
    }

    //    /**
    //     * @return Bodies[] Returns an array of Bodies objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('b.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Bodies
    //    {
    //        return $this->createQueryBuilder('b')
    //            ->andWhere('b.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

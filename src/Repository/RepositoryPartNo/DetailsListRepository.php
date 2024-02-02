<?php

namespace App\Repository\RepositoryPartNo;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\EntitiesPartNo\DetailsList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<DetailsList>
 *
 * @method DetailsList|null find($id, $lockMode = null, $lockVersion = null)
 * @method DetailsList|null findOneBy(array $criteria, array $orderBy = null)
 * @method DetailsList[]    findAll()
 * @method DetailsList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailsListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DetailsList::class);
    }

    //    /**
    //     * @return DetailsList[] Returns an array of DetailsList objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('d.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?DetailsList
    //    {
    //        return $this->createQueryBuilder('d')
    //            ->andWhere('d.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

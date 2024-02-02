<?php

namespace App\Repository\RepositoryPartNo;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\EntitiesPartNo\OriginalRooms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<OriginalRooms>
 *
 * @method OriginalRooms|null find($id, $lockMode = null, $lockVersion = null)
 * @method OriginalRooms|null findOneBy(array $criteria, array $orderBy = null)
 * @method OriginalRooms[]    findAll()
 * @method OriginalRooms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OriginalRoomsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OriginalRooms::class);
    }

    //    /**
    //     * @return OriginalRooms[] Returns an array of OriginalRooms objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('o.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?OriginalRooms
    //    {
    //        return $this->createQueryBuilder('o')
    //            ->andWhere('o.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

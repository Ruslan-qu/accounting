<?php

namespace App\Repository;

use App\Entity\IdDetailsManufacturer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IdDetailsManufacturer>
 *
 * @method IdDetailsManufacturer|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdDetailsManufacturer|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdDetailsManufacturer[]    findAll()
 * @method IdDetailsManufacturer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdDetailsManufacturerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IdDetailsManufacturer::class);
    }

//    /**
//     * @return IdDetailsManufacturer[] Returns an array of IdDetailsManufacturer objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IdDetailsManufacturer
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

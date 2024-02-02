<?php

namespace App\Repository\RepositoryPartNo;

use App\Entity\EntitiesPartNo\CarBrands;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<CarBrands>
 *
 * @method CarBrands|null find($id, $lockMode = null, $lockVersion = null)
 * @method CarBrands|null findOneBy(array $criteria, array $orderBy = null)
 * @method CarBrands[]    findAll()
 * @method CarBrands[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarBrandsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CarBrands::class);
    }

    //    /**
    //     * @return CarBrands[] Returns an array of CarBrands objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('c.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?CarBrands
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

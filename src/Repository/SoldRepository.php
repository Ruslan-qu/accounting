<?php

namespace App\Repository;

use App\Entity\Sold;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Sold>
 *
 * @method Sold|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sold|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sold[]    findAll()
 * @method Sold[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sold::class);
    }

    //    /**
    //     * @return Sold[] Returns an array of Sold objects
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

    //    public function findOneBySomeField($value): ?Sold
    //    {
    //        return $this->createQueryBuilder('s')
    //            ->andWhere('s.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * @return Sold[] Returns an array of Invoice objects
     */
    public function findBySaleList(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT s, i, d
                FROM App\Entity\Sold s
                INNER JOIN s.id_invoice i
                INNER JOIN i.id_details d
                WHERE i.sold_status = :sold_status'
        )->setParameter('sold_status', '2');
        //dd($query->getResult());
        return $query->getResult();
    }
}

<?php

namespace App\Repository\RepositoryCounterparty;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\EntitiesCounterparty\Counterparty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @extends ServiceEntityRepository<Counterparty>
 *
 * @method Counterparty|null find($id, $lockMode = null, $lockVersion = null)
 * @method Counterparty|null findOneBy(array $criteria, array $orderBy = null)
 * @method Counterparty[]    findAll()
 * @method Counterparty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CounterpartyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Counterparty::class);
    }

    //    /**
    //     * @return Counterparty[] Returns an array of Counterparty objects
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

    //    public function findOneBySomeField($value): ?Counterparty
    //    {
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}

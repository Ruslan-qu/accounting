<?php

namespace App\Repository;

use App\Entity\KuDir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<KuDir>
 *
 * @method KuDir|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuDir|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuDir[]    findAll()
 * @method KuDir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuDirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KuDir::class);
    }

    //    /**
    //     * @return KuDir[] Returns an array of KuDir objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('k')
    //            ->andWhere('k.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('k.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?KuDir
    //    {
    //        return $this->createQueryBuilder('k')
    //            ->andWhere('k.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

    /**
     * @return KuDir[] Returns Returns an array of KuDir objects
     */
    public function findByListUnrecordedKuDir(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT k
                FROM App\Entity\KuDir k
                WHERE k.status_ku_dir = :status_ku_dir'
        )->setParameter('status_ku_dir', 2);
        //dd($query->getResult());
        return $query->getResult();
    }

    /**
     * @return KuDir[] Returns Returns an array of KuDir objects
     */
    public function findOneByLastCheckKuDir(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT k
                FROM App\Entity\KuDir k
                ORDER BY k.id DESC'
        )->setMaxResults(1);
        //dd($query->getResult());
        return $query->getResult();
    }
}

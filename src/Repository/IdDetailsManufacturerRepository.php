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
    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchPart($part_no_search, $array_filter_part_no, $form_p_n_search): array
    {
        //dd($array_filter_part_no);
        $key = array_key_first($array_filter_part_no);
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d 
                FROM App\Entity\IdDetailsManufacturer d
                WHERE d.key = :part_no_search'
        )->setParameter('part_no_search', $part_no_search)
            ->bindValue('key', $key);
        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_part_name) {

                if ($value_part_name->$key_part_no_preg_replace_ucwords() == $form_p_n_search->getData()->$key_part_no_preg_replace_ucwords()) {
                    //dd($value_part_name);
                    $query[$key] = $value_part_name;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }
}

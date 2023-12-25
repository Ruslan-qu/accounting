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
     * @return IdDetailsManufacturer[] Returns an array of IdDetailsManufacturer objects
     */
    public function findBySearchPart($part_no_search, $array_filter_part_no, $form_p_n_search): array
    {

        $key = array_key_first($array_filter_part_no);

        $query = $this->findBy([$key => $part_no_search]);


        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_part_name) {

                if ($value_part_name->$key_part_no_preg_replace_ucwords() == $form_p_n_search->getData()->$key_part_no_preg_replace_ucwords()) {

                    $query[$key] = $value_part_name;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }

    /**
     * @return IdDetailsManufacturer[] Returns an array of IdDetailsManufacturer objects
     */
    public function findBySearchPrice($part_no_search, $array_filter_part_no, $form_price_search): array
    {

        $key = array_key_first($array_filter_part_no);

        $query = $this->findBy([$key => $part_no_search]);
        //$a = $query->getPartNumber();


        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_part_name) {

                if (
                    $value_part_name->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_part_name;
                } else {
                    unset($query[$key]);
                }
            }
        }
        //dd($query);
        return $query;
    }

    /**
     * @return IdDetailsManufacturer[] Returns an array of IdDetailsManufacturer objects
     */
    public function findByOriginalNumber($original_number): array
    {
        $entityManager = $this->getEntityManager();
        // dd($data_refund);
        $query = $entityManager->createQuery(
            'SELECT d, o
            FROM App\Entity\IdDetailsManufacturer d
            INNER JOIN d.id_original_number o
            WHERE o.original_number = :original_number'
        )->setParameter('original_number', $original_number);
        //dd($query->getResult());
        return $query->getResult();
    }
}

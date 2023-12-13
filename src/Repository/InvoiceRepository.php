<?php

namespace App\Repository;

use App\Entity\Invoice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Invoice>
 *
 * @method Invoice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Invoice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Invoice[]    findAll()
 * @method Invoice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Invoice::class);
    }

    //    /**
    //     * @return Invoice[] Returns an array of Invoice objects
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

    //    public function findOneBySomeField($value): ?Invoice
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
    public function findByDate($s_data_invoice_search, $po_data_invoice_search): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.data_invoice >= :s_data_invoice')
            ->andWhere('d.data_invoice <= :po_data_invoice')
            ->setParameter('s_data_invoice', $s_data_invoice_search)
            ->setParameter('po_data_invoice', $po_data_invoice_search)
            ->getQuery()
            ->getResult();

        /*$entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.data_invoice >= :s_data_invoice
                AND d.data_invoice <= :po_data_invoice'
        )->setParameter('s_data_invoice', $s_data_invoice_search)
            ->setParameter('po_data_invoice', $po_data_invoice_search);

        return $query->getResult();*/
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySDate($s_data_invoice_search): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.data_invoice >= :s_data_invoice')
            ->setParameter('s_data_invoice', $s_data_invoice_search)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByPoDate($po_data_invoice_search): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.data_invoice <= :po_data_invoice')
            ->setParameter('po_data_invoice', $po_data_invoice_search)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByPrice($s_price_search, $po_price_search): array
    {
        //dd($s_price_search);
        if (strpos($s_price_search, ',')) {
            $s_price_search = str_replace(',', '.', $s_price_search);
            $s_price = $s_price_search * 100;
            //dd($s_price_search);
        } else {
            //dd($s_price_search);
            $s_price = $s_price_search * 100;
        }

        if (strpos($po_price_search, ',')) {
            $po_price_search = str_replace(',', '.', $po_price_search);
            $p_price = $po_price_search * 100;
        } else {
            //dd($price);
            $p_price = $po_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.price >= :s_price
                AND d.price <= :p_price'
        )->setParameter('s_price', $s_price)
            ->setParameter('p_price', $p_price);
        //dd($query->getResult());
        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {
            //dd($value);
            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());
            //dd($price);
            if ($price >= $s_price_search && $price <= $po_price_search) {
                //dd($value);
                $query[] = $value;
            }
            // dd($price);
        }
        //dd($query);
        return $query;
    }


    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySPrice($s_price_search): array
    {
        //dd($s_price_search);
        if (strpos($s_price_search, ',')) {
            $s_price_search = str_replace(',', '.', $s_price_search);
            $s_price = $s_price_search * 100;
            //dd($s_price_search);
        } else {
            //dd($s_price_search);
            $s_price = $s_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.price >= :s_price'
        )->setParameter('s_price', $s_price);
        //dd($query->getResult());
        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {
            //dd($value);
            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());
            //dd($price);
            if ($price >= $s_price_search) {
                //dd($value);
                $query[] = $value;
            }
            // dd($price);
        }
        //dd($query);
        return $query;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByPoPrice($po_price_search): array
    {

        if (strpos($po_price_search, ',')) {
            $po_price_search = str_replace(',', '.', $po_price_search);
            $p_price = $po_price_search * 100;
        } else {
            //dd($price);
            $p_price = $po_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.price <= :p_price'
        )->setParameter('p_price', $p_price);
        //dd($query->getResult());
        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {
            //dd($value);
            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());
            //dd($price);
            if ($price <= $po_price_search) {
                //dd($value);
                $query[] = $value;
            }
            // dd($price);
        }
        //dd($query);
        return $query;
    }

    /**
     * Находит общую цену по id 
     *
     */
    public function findIdPrice($id)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.id = :id'
        )->setParameter('id', $id);
        //dd($query->getResult()[0]->getPrice());
        $arr_result = $query->getResult();

        foreach ($arr_result as $key => $value) {
            //dd($value);
            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());
            //dd($price);
            return $price;
        }
        //dd($query);

    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findAllInvoicePartNo(): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a'
        );

        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchNumber($numbers_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.part_numbers = :numbers_search'
        )->setParameter('numbers_search', $numbers_search);

        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchPartName($id_part_name_search, $array_filter_part_no, $form_price_search): array
    {

        $key = array_key_first($array_filter_part_no);

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.id_part_name = :id_part_name'
        )->setParameter('id_part_name', $id_part_name_search);

        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_part_name) {

                if (
                    $value_part_name->getIdDetails()->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_part_name;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchCarBrand($id_car_brand_search, $array_filter_part_no, $form_price_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.id_car_brand = :id_car_brand'
        )->setParameter('id_car_brand', $id_car_brand_search);

        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_car_brand) {

                if (
                    $value_car_brand->getIdDetails()->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_car_brand;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchSide($id_side_search, $array_filter_part_no, $form_price_search): array
    {

        $entityManager = $this->getEntityManager();
        $g = 'id_side';

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.' . $g . ' = :id_side'
        )->setParameter('id_side', $id_side_search);

        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_side) {

                if (
                    $value_side->getIdDetails()->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_side;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchBody($id_body_search, $array_filter_part_no, $form_price_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.id_body = :id_body'
        )->setParameter('id_body', $id_body_search);

        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_body) {

                if (
                    $value_body->getIdDetails()->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_body;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchAxle($id_axle_search, $array_filter_part_no, $form_price_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.id_axle = :id_axle'
        )->setParameter('id_axle', $id_axle_search);

        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_axle) {

                if (
                    $value_axle->getIdDetails()->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_axle;
                } else {
                    unset($query[$key]);
                }
            }
        }
        return $query;
    }
}

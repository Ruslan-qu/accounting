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
     * @return Sold[] Returns an array of Sold objects
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

    /**
     * @return Sold[] Returns an array of Sold objects
     */
    public function findOneByIdSoldEdit($id): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT s, i, d
                FROM App\Entity\Sold s
                INNER JOIN s.id_invoice i
                INNER JOIN i.id_details d
                WHERE i.id = :id'
        )->setParameter('id', $id);
        //dd($query->getResult());
        return $query->getResult();
    }

    /**
     * @return Sold[] Returns общая сумма price_sold
     */
    public function countTotalAmountPriceSold(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT SUM (s.price_sold)
                FROM App\Entity\Sold s
                INNER JOIN s.id_invoice i
                WHERE i.sold_status = :sold_status'
        )->setParameter('sold_status', '2');
        //dd($query->getResult());
        return $query->getResult();
    }

    /**
     * @return Sold[] Returns an array of Sold objects
     */
    public function findByListSoldParts($form_sales_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT s, i, d, c, pm, pn, cb, b, a, ds, o
                FROM App\Entity\Sold s
                INNER JOIN s.id_invoice i
                INNER JOIN i.id_details d
                INNER JOIN i.id_counterparty c
                INNER JOIN i.id_payment_method pm
                INNER JOIN d.id_part_name pn
                INNER JOIN d.id_car_brand cb
                INNER JOIN d.id_body b
                INNER JOIN d.id_axle a
                INNER JOIN d.id_side ds
                INNER JOIN d.id_original_number o'
        );
        //dd($form_sales_search->getData());
        $result = $query->getResult();
        // dd($result);
        $array_filter_form = array_filter($form_sales_search->getData());

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_form => $value_form) {

                if ($key_form == 'part_numbers_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getPartNumbers()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'original_number_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getIdOriginalNumber()->getOriginalNumber()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'manufacturers_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getManufacturers()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_part_name_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getIdPartName()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_car_brand_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getIdCarBrand()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_side_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getIdSide()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_body_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getIdBody()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_axle_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdDetails()->getIdAxle()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 's_data_invoice_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getDateSold() >= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'po_data_invoice_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getDateSold() <= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 's_price_sales') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key_result => $value_result) {

                        $price_s = ($value_result->getPriceSold() / 100);

                        if ($price_s >= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'po_price_sales') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key_result => $value_result) {

                        $price_po = ($value_result->getPriceSold() / 100);

                        if ($price_po <= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_counterparty_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdCounterparty()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'id_payment_method_sales') {

                    foreach ($result as $key_result => $value_result) {

                        if (
                            $value_result->getIdInvoice()->getIdPaymentMethod()
                            == $value_form
                        ) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return Sold[] Returns an array of Sold objects
     */
    public function findBySoldList(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT s, i, d, c, pm, pn, cb, b, a, ds, o
                FROM App\Entity\Sold s
                INNER JOIN s.id_invoice i
                INNER JOIN i.id_details d
                INNER JOIN i.id_counterparty c
                INNER JOIN i.id_payment_method pm
                INNER JOIN d.id_part_name pn
                INNER JOIN d.id_car_brand cb
                INNER JOIN d.id_body b
                INNER JOIN d.id_axle a
                INNER JOIN d.id_side ds
                INNER JOIN d.id_original_number o'
        );
        //dd($query->getResult());
        return $query->getResult();
    }

    /**
     * @return Sold[] Returns an array of Sold objects
     */
    public function findOneByIdReturnProduct($id_return_product): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT s, i, d, si
                FROM App\Entity\Sold s
                INNER JOIN s.id_invoice i
                INNER JOIN i.id_details d
                INNER JOIN d.id_in_stock si
                WHERE i.id = :id'
        )->setParameter('id', $id_return_product);
        //dd($query->getResult());
        return $query->getResult();
    }
}

<?php

namespace App\Repository;

use App\Entity\RefundDate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RefundDate>
 *
 * @method RefundDate|null find($id, $lockMode = null, $lockVersion = null)
 * @method RefundDate|null findOneBy(array $criteria, array $orderBy = null)
 * @method RefundDate[]    findAll()
 * @method RefundDate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RefundDateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RefundDate::class);
    }

    //    /**
    //     * @return RefundDate[] Returns an array of RefundDate objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('r.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?RefundDate
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }


    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByRefund(): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i, d
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                INNER JOIN i.id_details d'
        );

        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByDataRefund($data_refund): array
    {
        $entityManager = $this->getEntityManager();
        // dd($data_refund);
        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE r.refund_date = :refund_date'
        )->setParameter('refund_date', $data_refund);
        //dd($query->getResult());
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByNumberDocument($number_document_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.number_document = :number_document'
        )->setParameter('number_document', $number_document_search);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByDateInvoice($s_data_invoice_search, $po_data_invoice_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice >= :data_invoice_s
                AND i.data_invoice <= :data_invoice_po'
        )->setParameters(['data_invoice_s' => $s_data_invoice_search, 'data_invoice_po' => $po_data_invoice_search,]);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findBySDateInvoice($s_data_invoice_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice >= :data_invoice_s'
        )->setParameter('data_invoice_s', $s_data_invoice_search);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPoDateInvoice($po_data_invoice_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice <= :data_invoice_po'
        )->setParameter('data_invoice_po', $po_data_invoice_search);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByCounterparty($id_counterparty_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i, c
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                INNER JOIN i.id_counterparty c
                WHERE i.id_counterparty = :id_counterparty'
        )->setParameter('id_counterparty', $id_counterparty_search);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPartNumber($part_numbers_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i, d
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                INNER JOIN i.id_details d
                WHERE d.part_numbers = :part_numbers'
        )->setParameter('part_numbers', $part_numbers_search);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPartManufacturers($manufacturers_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i, d
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                INNER JOIN i.id_details d
                WHERE d.manufacturers = :manufacturers'
        )->setParameter('manufacturers', $manufacturers_search);
        return $query->getResult();
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPriceRefund($s_price_search, $po_price_search): array
    {

        if (strpos($s_price_search, ',')) {
            $s_price_search = str_replace(',', '.', $s_price_search);
            $s_price = $s_price_search * 100;
        } else {

            $s_price = $s_price_search * 100;
        }

        if (strpos($po_price_search, ',')) {
            $po_price_search = str_replace(',', '.', $po_price_search);
            $p_price = $po_price_search * 100;
        } else {

            $p_price = $po_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.price >= :s_price
                AND i.price <= :p_price'
        )->setParameter('s_price', $s_price)
            ->setParameter('p_price', $p_price);
        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {

            $price = ($value->getIdInvoiceRefundDate()->getPrice() / 100)
                - ((($value->getIdInvoiceRefundDate()->getPrice() / 100)
                    / $value->getIdInvoiceRefundDate()->getQuantity())
                    * $value->getIdInvoiceRefundDate()->getQuantitySold());

            if ($price >= $s_price_search && $price <= $po_price_search) {

                $query[] = $value;
            }
        }

        return $query;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findBySPriceRefund($s_price_search): array
    {

        if (strpos($s_price_search, ',')) {
            $s_price_search = str_replace(',', '.', $s_price_search);
            $s_price = $s_price_search * 100;
        } else {

            $s_price = $s_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.price >= :s_price'
        )->setParameter('s_price', $s_price);

        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {

            $price = ($value->getIdInvoiceRefundDate()->getPrice() / 100)
                - ((($value->getIdInvoiceRefundDate()->getPrice() / 100)
                    / $value->getIdInvoiceRefundDate()->getQuantity())
                    * $value->getIdInvoiceRefundDate()->getQuantitySold());

            if ($price >= $s_price_search) {

                $query[] = $value;
            }
        }

        return $query;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPoPriceRefund($po_price_search): array
    {

        if (strpos($po_price_search, ',')) {
            $po_price_search = str_replace(',', '.', $po_price_search);
            $p_price = $po_price_search * 100;
        } else {

            $p_price = $po_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.price <= :p_price'
        )->setParameter('p_price', $p_price);

        $arr_result = $query->getResult();
        //dd($arr_result);
        $query = [];

        foreach ($arr_result as $key => $value) {

            $price = ($value->getIdInvoiceRefundDate()->getPrice() / 100)
                - ((($value->getIdInvoiceRefundDate()->getPrice() / 100)
                    / $value->getIdInvoiceRefundDate()->getQuantity())
                    * $value->getIdInvoiceRefundDate()->getQuantitySold());

            if ($price <= $po_price_search) {

                $query[] = $value;
            }
        }
        return $query;
    }
}

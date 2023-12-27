<?php

namespace App\Repository;

use DateTime;
use App\Entity\RefundDate;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    /*public function findByDateInvoice($s_data_invoice_search, $po_data_invoice_search): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByDateInvoiceRefund(
        $s_data_invoice_search,
        $po_data_invoice_search,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice >= :s_data_invoice
                AND i.data_invoice <= :p_data_invoice
                AND i.Sales != :Sales'
        )->setParameters([
            's_data_invoice' => $s_data_invoice_search,
            'p_data_invoice' => $po_data_invoice_search,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['s_data_invoice_refund']);
        unset($array_filter_form['po_data_invoice_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice_refund == 'search_id_details_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdDetails()->getPartNumbers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_manufacturer_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdManufacturer()->getManufacturers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_counterparty_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdCounterparty() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }



        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findBySDateInvoice($s_data_invoice_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice >= :data_invoice_s'
        )->setParameter('data_invoice_s', $s_data_invoice_search);
        return $query->getResult();
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findBySDateInvoiceRefund(
        $s_data_invoice_search,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice >= :s_data_invoice
                AND i.Sales != :Sales'
        )->setParameters([
            's_data_invoice' => $s_data_invoice_search,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['s_data_invoice_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice_refund == 'search_id_details_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdDetails()->getPartNumbers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_manufacturer_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdManufacturer()->getManufacturers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_counterparty_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdCounterparty() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByPoDateInvoice($po_data_invoice_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice <= :data_invoice_po'
        )->setParameter('data_invoice_po', $po_data_invoice_search);
        return $query->getResult();
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPoDateInvoiceRefund(
        $po_data_invoice_search,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.data_invoice <= :p_data_invoice 
                AND i.Sales != :Sales'
        )->setParameters([
            'p_data_invoice' => $po_data_invoice_search,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['po_data_invoice_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_details_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdDetails()->getPartNumbers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_manufacturer_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdManufacturer()->getManufacturers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_counterparty_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdCounterparty() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByCounterparty($id_counterparty_search): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByCounterpartyRefund(
        $id_counterparty_search,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.id_counterparty = :id_counterparty 
                AND i.Sales != :Sales'
        )->setParameters([
            'id_counterparty' => $id_counterparty_search,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['search_id_counterparty_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_details_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdDetails()->getPartNumbers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_manufacturer_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdManufacturer()->getManufacturers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByPartNumber($part_numbers_search): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPartNumberRefund(
        $part_numbers_search,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i, d
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                INNER JOIN i.id_details d
                WHERE d.part_numbers = :part_numbers 
                AND i.Sales != :Sales'
        )->setParameters([
            'part_numbers' => $part_numbers_search,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['search_id_details_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'search_id_manufacturer_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if (
                            $value_invoice->getIdInvoiceRefundDate()->getIdManufacturer()->getManufacturers()
                            == $value_form
                        ) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }

        return $result;
    }


    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByPartManufacturers($manufacturers_search): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPartManufacturersRefund(
        $manufacturers_search,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i, d
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                INNER JOIN i.id_details d
                WHERE d.manufacturers = :manufacturers 
                AND i.Sales != :Sales'
        )->setParameters([
            'manufacturers' => $manufacturers_search,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['search_id_manufacturer_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByPriceRefund($s_price_search, $po_price_search): array
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
    }/*

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /* public function findBySPriceRefund($s_price_search): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByPoPriceRefund($po_price_search): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByPriceRefund(
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE i.Sales != :Sales'
        )->setParameters([
            'Sales' => '2',
        ]);
        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 's_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'po_price_refund') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                            - ((($value_invoice->getIdInvoiceRefundDate()->getPrice() / 100)
                                / $value_invoice->getIdInvoiceRefundDate()->getQuantity())
                                * $value_invoice->getIdInvoiceRefundDate()->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice_refund == 'data_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getRefundDate() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }


        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    /*public function findByDataRefund($data_refund): array
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
    }*/

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByDataRefund(
        $data_refund,
        $form_search_refund
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT r, i
                FROM App\Entity\RefundDate r
                INNER JOIN r.id_invoice_refund_date i
                WHERE r.refund_date = :refund_date 
                AND i.Sales != :Sales'
        )->setParameters([
            'refund_date' => $data_refund,
            'Sales' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_refund->getData());
        unset($array_filter_form['data_refund']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice_refund => $value_form) {

                if ($key_invoice_refund == 'refund_activity_refund') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdInvoiceRefundDate()->getIdRefundActivity() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return RefundDate[] Returns an array of RefundDate objects
     */
    public function findByActivityRefund($activity_refund): array
    {
        $entityManager = $this->getEntityManager();
        // dd($data_refund);
        $query = $entityManager->createQuery(
            'SELECT r, i
            FROM App\Entity\RefundDate r
            INNER JOIN r.id_invoice_refund_date i
            WHERE i.id_refund_activity = :id_refund_activity'
        )->setParameter('id_refund_activity', $activity_refund);
        //dd($query->getResult());
        return $query->getResult();
    }
}

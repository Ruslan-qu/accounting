<?php

namespace App\Repository\RepositoryIncomingDocuments;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\EntitiesIncomingDocuments\Invoice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    /* public function findByDate($s_data_invoice_search, $po_data_invoice_search): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.data_invoice >= :s_data_invoice')
            ->andWhere('d.data_invoice <= :po_data_invoice')
            ->setParameter('s_data_invoice', $s_data_invoice_search)
            ->setParameter('po_data_invoice', $po_data_invoice_search)
            ->getQuery()
            ->getResult();
    }*/

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /*public function findBySDate($s_data_invoice_search): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.data_invoice >= :s_data_invoice')
            ->setParameter('s_data_invoice', $s_data_invoice_search)
            ->getQuery()
            ->getResult();
    }/*

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /*public function findByPoDate($po_data_invoice_search): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.data_invoice <= :po_data_invoice')
            ->setParameter('po_data_invoice', $po_data_invoice_search)
            ->getQuery()
            ->getResult();
    }*/

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByDateInvoice(
        $s_data_invoice_search,
        $po_data_invoice_search,
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE i.data_invoice >= :s_data_invoice
                AND i.data_invoice <= :p_data_invoice
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            's_data_invoice' => $s_data_invoice_search,
            'p_data_invoice' => $po_data_invoice_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();
        //dd($result[0]->getIdDetails());
        //$array_splice_invoice = array_splice($array_filter_invoice, 2);

        $array_filter_form = array_filter($form_search_invoice->getData());
        unset($array_filter_form['s_data_invoice']);
        unset($array_filter_form['po_data_invoice']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice == 'search_id_details') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdDetails()->getPartNumbers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_manufacturer') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdManufacturer()->getManufacturers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_counterparty' || $key_invoice == 'search_id_payment_method') {

                    $key_invoice_preg_replace_ucwords =
                        'get' . preg_replace('#_#', '', ucwords($key_invoice, '_'));
                    $key_invoice_preg_replace_search = preg_replace('#Search#', '', $key_invoice_preg_replace_ucwords);

                    // dd($key_invoice_preg_replace_search);

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->$key_invoice_preg_replace_search() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySDate(
        $s_data_invoice_search,
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE i.data_invoice >= :s_data_invoice
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            's_data_invoice' => $s_data_invoice_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_invoice->getData());
        unset($array_filter_form['s_data_invoice']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice == 'search_id_details') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdDetails()->getPartNumbers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_manufacturer') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdManufacturer()->getManufacturers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_counterparty' || $key_invoice == 'search_id_payment_method') {

                    $key_invoice_preg_replace_ucwords =
                        'get' . preg_replace('#_#', '', ucwords($key_invoice, '_'));
                    $key_invoice_preg_replace_search = preg_replace('#Search#', '', $key_invoice_preg_replace_ucwords);

                    // dd($key_invoice_preg_replace_search);

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->$key_invoice_preg_replace_search() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByPoDate(
        $po_data_invoice_search,
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE i.data_invoice <= :po_data_invoice
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'po_data_invoice' => $po_data_invoice_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_invoice->getData());
        unset($array_filter_form['po_data_invoice']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice == 'search_id_details') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdDetails()->getPartNumbers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_manufacturer') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdManufacturer()->getManufacturers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_counterparty' || $key_invoice == 'search_id_payment_method') {

                    $key_invoice_preg_replace_ucwords =
                        'get' . preg_replace('#_#', '', ucwords($key_invoice, '_'));
                    $key_invoice_preg_replace_search = preg_replace('#Search#', '', $key_invoice_preg_replace_ucwords);

                    // dd($key_invoice_preg_replace_search);

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->$key_invoice_preg_replace_search() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByCounterparty(
        $id_counterparty_search,
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE i.id_counterparty = :id_counterparty
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'id_counterparty' => $id_counterparty_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_invoice->getData());
        unset($array_filter_form['search_id_counterparty']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice == 'search_id_details') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdDetails()->getPartNumbers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_manufacturer') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdManufacturer()->getManufacturers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_payment_method') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdPaymentMethod() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchNumberInvoice(
        $part_numbers_search,
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE d.part_numbers = :part_numbers
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'part_numbers' => $part_numbers_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_invoice->getData());
        unset($array_filter_form['search_id_details']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_manufacturer') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdManufacturer()->getManufacturers() == $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_payment_method') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdPaymentMethod() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchManufacturers(
        $manufacturers_search,
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE d.manufacturers = :manufacturers
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'manufacturers' => $manufacturers_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_invoice->getData());
        unset($array_filter_form['search_id_manufacturer']);

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'search_id_payment_method') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdPaymentMethod() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByPrice(
        $form_search_invoice
    ): array {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                WHERE i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'Sales' => '2',
            'refund' => '2'
        ]);

        $result = $query->getResult();

        $array_filter_form = array_filter($form_search_invoice->getData());

        if ($array_filter_form) {

            foreach ($array_filter_form as $key_invoice => $value_form) {

                if ($key_invoice == 's_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }

                    foreach ($result as $key => $value_invoice) {

                        $price_s = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_s >= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }

                if ($key_invoice == 'po_price') {

                    if (strpos($value_form, ',')) {
                        $value_form = str_replace(',', '.', $value_form);
                    }
                    foreach ($result as $key => $value_invoice) {

                        $price_po = ($value_invoice->getPrice() / 100)
                            - ((($value_invoice->getPrice() / 100) / $value_invoice->getQuantity())
                                * $value_invoice->getQuantitySold());

                        if ($price_po <= $value_form) {

                            $result[$key] = $value_invoice;
                        } else {
                            unset($result[$key]);
                        }
                    }
                }


                if ($key_invoice == 'search_id_payment_method') {

                    foreach ($result as $key => $value_invoice) {

                        if ($value_invoice->getIdPaymentMethod() == $value_form) {

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
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByPaymentMethod($id_payment_method_search): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                WHERE i.id_payment_method = :id_payment_method
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'id_payment_method' => $id_payment_method_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /*public function findByPrice($s_price_search, $po_price_search): array
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
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.price >= :s_price
                AND d.price <= :p_price'
        )->setParameter('s_price', $s_price)
            ->setParameter('p_price', $p_price);
        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {

            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());

            if ($price >= $s_price_search && $price <= $po_price_search) {

                $query[] = $value;
            }
        }

        return $query;
    }*/


    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /*public function findBySPrice($s_price_search): array
    {

        if (strpos($s_price_search, ',')) {
            $s_price_search = str_replace(',', '.', $s_price_search);
            $s_price = $s_price_search * 100;
        } else {

            $s_price = $s_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.price >= :s_price'
        )->setParameter('s_price', $s_price);

        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {

            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());

            if ($price >= $s_price_search) {

                $query[] = $value;
            }
        }

        return $query;
    }*/

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /*public function findByPoPrice($po_price_search): array
    {

        if (strpos($po_price_search, ',')) {
            $po_price_search = str_replace(',', '.', $po_price_search);
            $p_price = $po_price_search * 100;
        } else {

            $p_price = $po_price_search * 100;
        }

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\Invoice d
                WHERE d.price <= :p_price'
        )->setParameter('p_price', $p_price);

        $arr_result = $query->getResult();

        $query = [];

        foreach ($arr_result as $key => $value) {

            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());

            if ($price <= $po_price_search) {

                $query[] = $value;
            }
        }
        return $query;
    }*/

    /**
     * Находит общую цену по id 
     *
     */
    public function findIdPrice($id)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice d
                WHERE d.id = :id'
        )->setParameter('id', $id);

        $arr_result = $query->getResult();

        foreach ($arr_result as $key => $value) {

            $price = ($value->getPrice() / 100) - ((($value->getPrice() / 100) / $value->getQuantity())
                * $value->getQuantitySold());

            return $price;
        }
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findAllInvoicePartNo(): array
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\EntitiesIncomingDocuments\Invoice d
                INNER JOIN d.id_details a'
        );

        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchNumberPrice($numbers_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                WHERE d.part_numbers = :numbers_search
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters([
            'numbers_search' => $numbers_search,
            'Sales' => '2',
            'refund' => '2'
        ]);

        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /* public function findBySearchManufacturers($manufacturers_search): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\Invoice d
                INNER JOIN d.id_details a
                WHERE a.manufacturers = :manufacturers_search'
        )->setParameter('manufacturers_search', $manufacturers_search);

        return $query->getResult();
    }*/

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchPart($id_search, $array_filter_part_no, $form_price_search): array
    {

        $part_no = array_key_first($array_filter_part_no);

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\EntitiesIncomingDocuments\Invoice d
                INNER JOIN d.id_details a
                WHERE a.' . $part_no . ' = :id_search'
        )->setParameter('id_search', $id_search);

        $query = $query->getResult();

        foreach ($array_filter_part_no as $key_part_no => $value_part_no) {

            $key_part_no_preg_replace_ucwords =
                'get' . preg_replace('#_#', '', ucwords($key_part_no, '_'));

            foreach ($query as $key => $value_part) {

                if (
                    $value_part->getIdDetails()->$key_part_no_preg_replace_ucwords()
                    == $form_price_search->getData()->$key_part_no_preg_replace_ucwords()
                ) {

                    $query[$key] = $value_part;
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
    public function findOneByInvoiceJoinDetails($id): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT d, a
                FROM App\Entity\EntitiesIncomingDocuments\Invoice d
                INNER JOIN d.id_details a
                WHERE d.id = :id'
        )->setParameter('id', $id);
        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findOneByInvoiceJoinDetailsAvailability($id): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, a, s
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                INNER JOIN d.id_in_stock s
                WHERE i.id = :id'
        )->setParameter('id', $id);
        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    /*public function findByCompleteSales(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d, s
                FROM App\Entity\Invoice i
                INNER JOIN i.id_details d
                WHERE i.sold_status = :sold_status'
        )->setParameter('sold_status', 2);
        return $query->getResult();
    }*/

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByCountAvailability($id_details): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT COUNT(i.id_details)
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                WHERE i.id_details = :id_details
                AND i.Sales != :Sales
                AND i.refund != :refund'
        )->setParameters(['id_details' => $id_details, 'Sales' => 2, 'refund' => 2]);
        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchInvoiceKuDir($form_ku_dir_invoice_search): array
    {
        $array_filter_form = array_filter($form_ku_dir_invoice_search->getData());

        if ($array_filter_form) {

            $entityManager = $this->getEntityManager();

            $query = $entityManager->createQuery(
                'SELECT i, d, c
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                INNER JOIN i.id_counterparty c
                WHERE i.ku_dir_status = :ku_dir_status
                AND i.Sales = :Sales
                AND i.refund != :refund
                AND i.id_payment_method = :id_payment_method
                AND i.id_ku_dir is NULL'
            )->setParameters([
                'ku_dir_status' => '2',
                'Sales' => '2',
                'refund' => '2',
                'id_payment_method' => '2',
            ]);
            //dd($query->getResult());

            $result = $query->getResult();



            foreach ($array_filter_form as $key_form => $value_form) {

                if ($key_form == 'from_date_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getDataInvoice() >= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'by_date_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getDataInvoice() <= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'from_price_invoice_ku_dir') {


                    foreach ($result as $key_result => $value_result) {

                        $price_from = ($value_result->getPrice() / 100);

                        if ($price_from >= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'by_price_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        $price_po = ($value_result->getPrice() / 100);

                        if ($price_po <= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'search_number_document_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getNumberDocument() == $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'search_id_counterparty_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getIdCounterparty() == $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'search_id_details_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getIdDetails()->getPartNumbers() == $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'search_id_manufacturer_invoice_ku_dir') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getIdDetails()->getManufacturers() == $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }
            }
        } else {
            $result = [];
        }
        return $result;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByInvoiceIdKuDir(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, d, c, k
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_details d
                INNER JOIN i.id_counterparty c
                INNER JOIN i.id_ku_dir k
                WHERE i.ku_dir_status != :ku_dir_status
                AND i.id_ku_dir is not NULL
                AND k.status_ku_dir = :status_ku_dir
                AND i.Sales = :Sales
                AND i.refund != :refund'
        )->setParameters([
            'ku_dir_status' => '2',
            'status_ku_dir' => '2',
            'Sales' => '2',
            'refund' => '2'
        ]);
        //dd($query->getResult());
        return $query->getResult();
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findBySearchKuDir($form_ku_dir_search): array
    {
        $array_filter_form = array_filter($form_ku_dir_search->getData());

        if ($array_filter_form) {

            $entityManager = $this->getEntityManager();

            $query = $entityManager->createQuery(
                'SELECT i, k
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_ku_dir k
                WHERE k.status_ku_dir != :status_ku_dir
                AND i.Sales = :Sales
                AND i.refund != :refund
                AND i.id_ku_dir is not NULL'
            )->setParameters([
                'status_ku_dir' => '2',
                'Sales' => '2',
                'refund' => '2',
            ]);


            $result = $query->getResult();



            foreach ($array_filter_form as $key_form => $value_form) {

                if ($key_form == 'receipt_from_date') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getIdKuDir()->getReceiptDate() >= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'receipt_by_date') {

                    foreach ($result as $key_result => $value_result) {
                        //dd($value_form);
                        if ($value_result->getIdKuDir()->getReceiptDate() <= $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'receipt_change') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getIdKuDir()->getReceiptChange() == $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }

                if ($key_form == 'receipt_number') {

                    foreach ($result as $key_result => $value_result) {

                        if ($value_result->getIdKuDir()->getReceiptNumber() == $value_form) {

                            $result[$key_result] = $value_result;
                        } else {
                            unset($result[$key_result]);
                        }
                    }
                }
            }
        } else {
            $result = [];
        }
        return $result;
    }

    /**
     * @return Invoice[] Returns an array of Invoice objects
     */
    public function findByMonthlyTableKuDir(): array
    {
        $month = new \DateTime('midnight first day of this month');
        $format_month = $month->format('Y-m-d');
        $day_month = new \DateTime();
        $format_month = $month->format('Y-m-d');
        //dd($month);
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT i, k
                FROM App\Entity\EntitiesIncomingDocuments\Invoice i
                INNER JOIN i.id_ku_dir k
                WHERE i.ku_dir_status != :ku_dir_status
                AND i.id_ku_dir is not NULL
                AND k.status_ku_dir != :status_ku_dir
                AND i.Sales = :Sales
                AND i.refund != :refund
                AND k.receipt_date >= :beginning_month_receipt_date
                AND k.receipt_date <= :day_month_receipt_date'
        )->setParameters([
            'ku_dir_status' => '2',
            'status_ku_dir' => '2',
            'Sales' => '2',
            'refund' => '2',
            'beginning_month_receipt_date' => $format_month,
            'day_month_receipt_date' => $day_month,
        ]);
        //dd($query->getResult());
        return $query->getResult();
    }
}

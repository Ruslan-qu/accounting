<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Entity\RefundDate;
use App\Entity\Availability;
use App\Entity\RefundActivity;
use App\Form\SearchRefundType;
use App\Form\SearchInvoiceType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
use App\Repository\RefundDateRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RefundController extends AbstractController
{
    #[Route('/refund', name: 'refund')]
    public function SearchRefund(
        ManagerRegistry $doctrine,
        Request $request,
        ValidatorInterface $validator,
        InvoiceRepository $InvoiceRepository,
        RefundDateRepository $RefundDateRepository,
    ): Response {

        /*Подключаем формы */
        $form_search_refund = $this->createForm(SearchRefundType::class);

        /*Валидация формы */
        $form_search_refund->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_refund = $validator->validate($form_search_refund);

        /* Массив для передачи в твиг списка по поиску */
        $arr_refund[] = $RefundDateRepository->findByRefund();

        if ($form_search_refund->isSubmitted()) {
            if ($form_search_refund->isValid()) {
                unset($arr_sales);
                /* собераем списка по поиску */
                $number_document_search = $form_search_refund->getData()['search_number_document_refund'];
                $s_data_invoice_search = $form_search_refund->getData()['s_data_invoice_refund'];
                $po_data_invoice_search = $form_search_refund->getData()['po_data_invoice_refund'];
                $id_counterparty_search = $form_search_refund->getData()['search_id_counterparty_refund'];
                $part_numbers_search = strtolower($form_search_refund->getData()['search_id_details_refund']);
                $manufacturers_search = strtolower($form_search_refund->getData()['search_id_manufacturer_refund']);
                $s_price_search = $form_search_refund->getData()['s_price_refund'];
                $po_price_search = $form_search_refund->getData()['po_price_refund'];
                $data_refund = $form_search_refund->getData()['data_refund'];
                $activity_refund = $form_search_refund->getData()['refund_activity_refund'];

                if ($number_document_search) {

                    $arr_refund[] = $RefundDateRepository->findByNumberDocument($number_document_search);
                } elseif ($s_data_invoice_search && $po_data_invoice_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByDateInvoiceRefund(
                            $s_data_invoice_search,
                            $po_data_invoice_search,
                            $form_search_refund
                        );
                } elseif ($s_data_invoice_search && !$po_data_invoice_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findBySDateInvoiceRefund($s_data_invoice_search, $form_search_refund);
                } elseif (!$s_data_invoice_search && $po_data_invoice_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByPoDateInvoiceRefund($po_data_invoice_search, $form_search_refund);
                } elseif ($id_counterparty_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByCounterpartyRefund($id_counterparty_search, $form_search_refund);
                } elseif ($part_numbers_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByPartNumberRefund($part_numbers_search, $form_search_refund);
                } elseif ($manufacturers_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByPartManufacturersRefund($manufacturers_search, $form_search_refund);
                } elseif ($s_price_search || $po_price_search) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByPriceRefund($form_search_refund);
                } elseif ($data_refund) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByDataRefund($data_refund, $form_search_refund);
                } elseif ($activity_refund) {

                    $arr_refund[] = $RefundDateRepository
                        ->findByActivityRefund($activity_refund);
                }

                if (empty($arr_refund)) {
                    return $this->redirectToRoute('refund');
                }
            } else {

                /* Выводим вбитые данные в форму поиска если форма не прошла валидацию, через сессии */
                $value_form_search_refund = $request->request->all();
                if ($value_form_search_refund) {
                    foreach ($value_form_search_refund as $key => $values) {
                        if (is_iterable($values)) {
                            foreach ($values as $key => $value) {
                                $this->addFlash($key, $value);
                            }
                        }
                    }
                }

                /* Выводим сообщения ошибки в форму поиска, через сессии  */
                if ($errors_refund) {
                    foreach ($errors_refund as $key) {
                        $message = $key->getmessage();
                        $propertyPath = $key->getpropertyPath();
                        $this->addFlash(
                            $propertyPath,
                            $message
                        );
                    }
                }
                return $this->redirectToRoute('refund');
            }
        }

        //dd($arr_refund);
        return $this->render('refund/refund.html.twig', [
            'title_logo' => 'Возвращенные детали',
            'legend_search' => 'Поиск',
            'form_search' => $form_search_refund->createView(),
            'arr_refund' => $arr_refund,
        ]);
    }

    /* функция сброса */
    #[Route('/reset_refund', name: 'reset_refund')]
    public function Reset(): Response
    {
        return $this->redirectToRoute('refund');
    }

    /* Функция отменяет возврат  */
    #[Route('/edit_refund', name: 'edit_refund')]
    public function EditRefund(
        ManagerRegistry $doctrine,
        Request $request,
        InvoiceRepository $InvoiceRepository,
    ): Response {
        if ($request->request->all()) {

            $id = $request->request->all()['edit_refund'];

            $edit_refund = $InvoiceRepository->findOneByInvoiceJoinDetails($id);

            $edit_refund[0]->setRefund(1);

            $delete_refund_date = $doctrine->getRepository(RefundDate::class)
                ->findOneBy(['id_invoice_refund_date' => $id]);

            $entityManager = $doctrine->getManager();
            $entityManager->remove($delete_refund_date);
            $entityManager->flush();

            $in_stock = $doctrine->getRepository(Availability::class)->find(1);
            $count_availability = $InvoiceRepository->findByCountAvailability($edit_refund[0]->getIdDetails());
            if ($count_availability[0][1] != 0) {

                $edit_refund[0]->getIdDetails()->setIdInStock($in_stock);
            }
            $doctrine->getManager()->flush();
        }


        return $this->redirectToRoute('refund');
    }

    /* функция удаления */
    #[Route('/delete_refund', name: 'delete_refund')]
    public function deleteRefund(ManagerRegistry $doctrine, Request $request): Response
    {
        // dd($request->request->all());
        if ($request->request->all()) {
            $id_delete_refund = $request->request->all()['delete_refund'];

            $delete_refund = $doctrine->getRepository(Invoice::class)->find($id_delete_refund);

            $entityManager = $doctrine->getManager();
            $entityManager->remove($delete_refund);
            $entityManager->flush();
        }

        return $this->redirectToRoute('refund');
    }

    /* Функция состояния возврат */
    #[Route('/edit_activity', name: 'edit_activity')]
    public function EditActivity(ManagerRegistry $doctrine, Request $request): Response
    {
        if ($request->request->all()) {

            $id = $request->request->all()['edit_activity'];

            $edit_activity = $doctrine->getRepository(Invoice::class)->find($id);

            $refund_activity = $edit_activity->getIdRefundActivity()->getId();

            $id_activity = '';
            if ($refund_activity == 1) {
                $id_activity = 2;
            } elseif ($refund_activity == 2) {
                $id_activity = 1;
            }

            $id_refund_activit = $doctrine->getRepository(RefundActivity::class)->find($id_activity);

            $edit_activity->setIdRefundActivity($id_refund_activit);

            $doctrine->getManager()->flush();
        }

        return $this->redirectToRoute('refund');
    }
}

<?php

namespace App\Controller\Sections_header;

use App\Entity\Invoice;
use App\Entity\RefundActivity;
use App\Form\SearchInvoiceType;
use App\Entity\IdDetailsManufacturer;
use App\Repository\InvoiceRepository;
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
    ): Response {

        /*Подключаем формы */
        $form_search_refund = $this->createForm(SearchInvoiceType::class);

        /*Валидация формы */
        $form_search_refund->handleRequest($request);

        /*Подключаем валидацию форм */
        $errors_refund = $validator->validate($form_search_refund);

        /* Массив для передачи в твиг списка по поиску */
        $arr_refund = [];

        if ($form_search_refund->isSubmitted()) {
            if ($form_search_refund->isValid()) {
                //dd($form_search_refund);
                /* Массив для сбора списка по поиску */
                $arr_refund_search = [];

                /* собераем списка по поиску */
                $number_document_search = $request->request->all()['search_invoice']['search_number_document'];
                if ($number_document_search) {
                    $arr_refund_search[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['number_document' => $number_document_search]);
                }

                $s_data_invoice_search = $request->request->all()['search_invoice']['s_data_invoice'];
                $po_data_invoice_search = $request->request->all()['search_invoice']['po_data_invoice'];
                if ($s_data_invoice_search && $po_data_invoice_search) {
                    $arr_refund_search[] = $InvoiceRepository
                        ->findByDate($s_data_invoice_search, $po_data_invoice_search);
                }
                if ($s_data_invoice_search && !$po_data_invoice_search) {
                    $arr_refund_search[] = $InvoiceRepository
                        ->findBySDate($s_data_invoice_search);
                }
                if (!$s_data_invoice_search && $po_data_invoice_search) {
                    $arr_refund_search[] = $InvoiceRepository
                        ->findByPoDate($po_data_invoice_search);
                }

                $id_counterparty_search = $request->request->all()['search_invoice']['search_id_counterparty'];
                if ($id_counterparty_search) {
                    $arr_refund_search[] = $doctrine->getRepository(Invoice::class)
                        ->findBy(['id_counterparty' => $id_counterparty_search]);
                }

                $part_numbers_search = strtolower($request->request->all()['search_invoice']['id_details']);
                if ($part_numbers_search) {
                    $arr_details_manufacturer_details = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['part_numbers' => $part_numbers_search]);
                    if ($arr_details_manufacturer_details) {
                        $arr_refund_search[] = $doctrine->getRepository(Invoice::class)
                            ->findBy(['id_details' => $arr_details_manufacturer_details[0]->getId()]);
                    }
                }

                $manufacturers_search = strtolower($request->request->all()['search_invoice']['id_manufacturer']);
                if ($manufacturers_search) {
                    $arr_details_manufacturer = $doctrine->getRepository(IdDetailsManufacturer::class)
                        ->findBy(['manufacturers' => $manufacturers_search]);
                    if ($arr_details_manufacturer) {
                        $arr_refund_search[] = $doctrine->getRepository(Invoice::class)
                            ->findBy(['id_manufacturer' => $arr_details_manufacturer[0]->getId()]);
                    }
                }

                $s_price_search = $request->request->all()['search_invoice']['s_price'];
                $po_price_search = $request->request->all()['search_invoice']['po_price'];
                if ($s_price_search && $po_price_search) {
                    $arr_refund_search[] = $InvoiceRepository
                        ->findByPrice($s_price_search, $po_price_search);
                }
                if ($s_price_search && !$po_price_search) {
                    $arr_refund_search[] = $InvoiceRepository
                        ->findBySPrice($s_price_search);
                }
                if (!$s_price_search && $po_price_search) {
                    $arr_refund_search[] = $InvoiceRepository
                        ->findByPoPrice($po_price_search);
                }

                /* Удаляем дубли из списка по поиску */
                $newArray = [];
                $Fruits = [];
                foreach ($arr_refund_search as $key => $value) {
                    foreach ($value as $key => $line) {
                        if (!in_array($line->getId(), $Fruits)) {
                            $Fruits[] = $line->getId();
                            $newArray[$key] = $line;
                        }
                    }
                }
                $arr_refund[] = $newArray;
                unset($newArray);
                unset($Fruits);
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
        } else {
            $arr_refund[] = $doctrine->getRepository(Invoice::class)->findAll();
        }


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
    public function EditRefund(ManagerRegistry $doctrine, Request $request): Response
    {
        $id = $request->request->all()['edit_refund'];

        $edit_refund = $doctrine->getRepository(Invoice::class)->find($id);

        $edit_refund->setRefund(1);

        $doctrine->getManager()->flush();

        return $this->redirectToRoute('refund');
    }

    /* функция удаления */
    #[Route('/delete_refund', name: 'delete_refund')]
    public function deleteRefund(ManagerRegistry $doctrine, Request $request): Response
    {

        $id_delete_refund = $request->request->all()['delete_refund'];

        $delete_refund = $doctrine->getRepository(Invoice::class)->find($id_delete_refund);

        $entityManager = $doctrine->getManager();
        $entityManager->remove($delete_refund);
        $entityManager->flush();

        return $this->redirectToRoute('refund');
    }

    /* Функция состояния возврат */
    #[Route('/edit_activity', name: 'edit_activity')]
    public function EditActivity(ManagerRegistry $doctrine, Request $request): Response
    {
        $id_activity = '';

        $id = $request->request->all()['edit_activity'];

        $edit_activity = $doctrine->getRepository(Invoice::class)->find($id);

        $refund_activity = $edit_activity->getIdRefundActivity()->getId();

        if ($refund_activity == 1) {
            $id_activity = 2;
        } elseif ($refund_activity == 2) {
            $id_activity = 1;
        }

        $id_refund_activit = $doctrine->getRepository(RefundActivity::class)->find($id_activity);

        $edit_activity->setIdRefundActivity($id_refund_activit);

        $doctrine->getManager()->flush();

        return $this->redirectToRoute('refund');
    }
}

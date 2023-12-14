<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/counterparty' => [[['_route' => 'counterparty', '_controller' => 'App\\Controller\\Sections_header\\CounterpartyController::AddCounterparty'], null, null, null, false, false, null]],
        '/incoming_documents' => [[['_route' => 'incoming_documents', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::AddIncomingDocuments'], null, null, null, false, false, null]],
        '/sales_incoming_documents' => [[['_route' => 'sales_incoming_documents', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesIncomingDocuments'], null, null, null, false, false, null]],
        '/sales_parts' => [[['_route' => 'sales_parts', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesParts'], null, null, null, false, false, null]],
        '/refund_part' => [[['_route' => 'refund_part', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::Refund'], null, ['GET' => 0], null, false, false, null]],
        '/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::Reset'], null, null, null, false, false, null]],
        '/delete_invoice' => [[['_route' => 'delete_invoice', '_controller' => 'App\\Controller\\Sections_header\\IncomingDocumentsController::deleteInvoice'], null, null, null, false, false, null]],
        '/ku_dir' => [[['_route' => 'ku_dir', '_controller' => 'App\\Controller\\Sections_header\\KuDirController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_main_page', '_controller' => 'App\\Controller\\Sections_header\\MainPageController::index'], null, null, null, false, false, null]],
        '/part_no' => [[['_route' => 'part_no', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::SearchPart'], null, null, null, false, false, null]],
        '/sales_part_no' => [[['_route' => 'sales_part_no', '_controller' => 'App\\Controller\\Sections_header\\PartNoController::SalesIncomingDocuments'], null, null, null, false, false, null]],
        '/price' => [[['_route' => 'price', '_controller' => 'App\\Controller\\Sections_header\\PriceController::AddPrice'], null, null, null, false, false, null]],
        '/refund' => [[['_route' => 'refund', '_controller' => 'App\\Controller\\Sections_header\\RefundController::index'], null, null, null, false, false, null]],
        '/sales' => [[['_route' => 'sales', '_controller' => 'App\\Controller\\Sections_header\\SalesController::index'], null, null, null, false, false, null]],
        '/health-check' => [[['_route' => 'health_check', '_controller' => 'App\\Controller\\Test\\HealthCheckAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];

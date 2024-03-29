<?php

namespace ContainerHPdC3rz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CSAbRMnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CSAbRMn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CSAbRMn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\CounterpartyController::EditCounterparty' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\CounterpartyController::SalesCounterparty' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\CounterpartyController::SearchCounterparty' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\CounterpartyController::deleteCounterparty' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\IncomingDocumentsController::Refund' => ['privates', '.service_locator.ms_7f9Z', 'get_ServiceLocator_Ms7f9ZService', true],
            'App\\Controller\\IncomingDocumentsController::SalesIncomingDocuments' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\IncomingDocumentsController::deleteInvoice' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\IncomingDocumentsController::searchIncomingDocuments' => ['privates', '.service_locator.7DBoiXF', 'get_ServiceLocator_7DBoiXFService', true],
            'App\\Controller\\KuDirController::deleteListInvoiceIdKuDir' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\KuDirController::editKuDir' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\KuDirController::kuDir' => ['privates', '.service_locator.rGPmLAm', 'get_ServiceLocator_RGPmLAmService', true],
            'App\\Controller\\KuDirController::kuDirSave' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\KuDirController::manualSavingKuDir' => ['privates', '.service_locator.jFaokal', 'get_ServiceLocator_JFaokalService', true],
            'App\\Controller\\KuDirController::saveEditKuDir' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\KuDirController::searchKuDir' => ['privates', '.service_locator.rGPmLAm', 'get_ServiceLocator_RGPmLAmService', true],
            'App\\Controller\\KuDirController::statusChangesKuDir' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PartNoController::deletePart' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PartNoController::editPart' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\PartNoController::savePart' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\PartNoController::searchPart' => ['privates', '.service_locator.X6ECqyi', 'get_ServiceLocator_X6ECqyiService', true],
            'App\\Controller\\PriceController::completeSales' => ['privates', '.service_locator.2OWCZjk', 'get_ServiceLocator_2OWCZjkService', true],
            'App\\Controller\\PriceController::deleteSaleList' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PriceController::editSoldPrice' => ['privates', '.service_locator.tjlWKb2', 'get_ServiceLocator_TjlWKb2Service', true],
            'App\\Controller\\PriceController::searchPrice' => ['privates', '.service_locator.3r7sRWX', 'get_ServiceLocator_3r7sRWXService', true],
            'App\\Controller\\PriceController::soldPrice' => ['privates', '.service_locator.lnU._zX', 'get_ServiceLocator_LnU_ZXService', true],
            'App\\Controller\\RefundController::EditActivity' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RefundController::EditRefund' => ['privates', '.service_locator.ms_7f9Z', 'get_ServiceLocator_Ms7f9ZService', true],
            'App\\Controller\\RefundController::SearchRefund' => ['privates', '.service_locator.gKFi.ZU', 'get_ServiceLocator_GKFi_ZUService', true],
            'App\\Controller\\RefundController::deleteRefund' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\SalesController::quantityReturnProduct' => ['privates', '.service_locator.tjlWKb2', 'get_ServiceLocator_TjlWKb2Service', true],
            'App\\Controller\\SalesController::searchSales' => ['privates', '.service_locator.CUqvNoJ', 'get_ServiceLocator_CUqvNoJService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\CounterpartyController:EditCounterparty' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\CounterpartyController:SalesCounterparty' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\CounterpartyController:SearchCounterparty' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\CounterpartyController:deleteCounterparty' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\IncomingDocumentsController:Refund' => ['privates', '.service_locator.ms_7f9Z', 'get_ServiceLocator_Ms7f9ZService', true],
            'App\\Controller\\IncomingDocumentsController:SalesIncomingDocuments' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\IncomingDocumentsController:deleteInvoice' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\IncomingDocumentsController:searchIncomingDocuments' => ['privates', '.service_locator.7DBoiXF', 'get_ServiceLocator_7DBoiXFService', true],
            'App\\Controller\\KuDirController:deleteListInvoiceIdKuDir' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\KuDirController:editKuDir' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\KuDirController:kuDir' => ['privates', '.service_locator.rGPmLAm', 'get_ServiceLocator_RGPmLAmService', true],
            'App\\Controller\\KuDirController:kuDirSave' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\KuDirController:manualSavingKuDir' => ['privates', '.service_locator.jFaokal', 'get_ServiceLocator_JFaokalService', true],
            'App\\Controller\\KuDirController:saveEditKuDir' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\KuDirController:searchKuDir' => ['privates', '.service_locator.rGPmLAm', 'get_ServiceLocator_RGPmLAmService', true],
            'App\\Controller\\KuDirController:statusChangesKuDir' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PartNoController:deletePart' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PartNoController:editPart' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\PartNoController:savePart' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\PartNoController:searchPart' => ['privates', '.service_locator.X6ECqyi', 'get_ServiceLocator_X6ECqyiService', true],
            'App\\Controller\\PriceController:completeSales' => ['privates', '.service_locator.2OWCZjk', 'get_ServiceLocator_2OWCZjkService', true],
            'App\\Controller\\PriceController:deleteSaleList' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\PriceController:editSoldPrice' => ['privates', '.service_locator.tjlWKb2', 'get_ServiceLocator_TjlWKb2Service', true],
            'App\\Controller\\PriceController:searchPrice' => ['privates', '.service_locator.3r7sRWX', 'get_ServiceLocator_3r7sRWXService', true],
            'App\\Controller\\PriceController:soldPrice' => ['privates', '.service_locator.lnU._zX', 'get_ServiceLocator_LnU_ZXService', true],
            'App\\Controller\\RefundController:EditActivity' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\RefundController:EditRefund' => ['privates', '.service_locator.ms_7f9Z', 'get_ServiceLocator_Ms7f9ZService', true],
            'App\\Controller\\RefundController:SearchRefund' => ['privates', '.service_locator.gKFi.ZU', 'get_ServiceLocator_GKFi_ZUService', true],
            'App\\Controller\\RefundController:deleteRefund' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\SalesController:quantityReturnProduct' => ['privates', '.service_locator.tjlWKb2', 'get_ServiceLocator_TjlWKb2Service', true],
            'App\\Controller\\SalesController:searchSales' => ['privates', '.service_locator.CUqvNoJ', 'get_ServiceLocator_CUqvNoJService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\CounterpartyController::EditCounterparty' => '?',
            'App\\Controller\\CounterpartyController::SalesCounterparty' => '?',
            'App\\Controller\\CounterpartyController::SearchCounterparty' => '?',
            'App\\Controller\\CounterpartyController::deleteCounterparty' => '?',
            'App\\Controller\\IncomingDocumentsController::Refund' => '?',
            'App\\Controller\\IncomingDocumentsController::SalesIncomingDocuments' => '?',
            'App\\Controller\\IncomingDocumentsController::deleteInvoice' => '?',
            'App\\Controller\\IncomingDocumentsController::searchIncomingDocuments' => '?',
            'App\\Controller\\KuDirController::deleteListInvoiceIdKuDir' => '?',
            'App\\Controller\\KuDirController::editKuDir' => '?',
            'App\\Controller\\KuDirController::kuDir' => '?',
            'App\\Controller\\KuDirController::kuDirSave' => '?',
            'App\\Controller\\KuDirController::manualSavingKuDir' => '?',
            'App\\Controller\\KuDirController::saveEditKuDir' => '?',
            'App\\Controller\\KuDirController::searchKuDir' => '?',
            'App\\Controller\\KuDirController::statusChangesKuDir' => '?',
            'App\\Controller\\PartNoController::deletePart' => '?',
            'App\\Controller\\PartNoController::editPart' => '?',
            'App\\Controller\\PartNoController::savePart' => '?',
            'App\\Controller\\PartNoController::searchPart' => '?',
            'App\\Controller\\PriceController::completeSales' => '?',
            'App\\Controller\\PriceController::deleteSaleList' => '?',
            'App\\Controller\\PriceController::editSoldPrice' => '?',
            'App\\Controller\\PriceController::searchPrice' => '?',
            'App\\Controller\\PriceController::soldPrice' => '?',
            'App\\Controller\\RefundController::EditActivity' => '?',
            'App\\Controller\\RefundController::EditRefund' => '?',
            'App\\Controller\\RefundController::SearchRefund' => '?',
            'App\\Controller\\RefundController::deleteRefund' => '?',
            'App\\Controller\\SalesController::quantityReturnProduct' => '?',
            'App\\Controller\\SalesController::searchSales' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\CounterpartyController:EditCounterparty' => '?',
            'App\\Controller\\CounterpartyController:SalesCounterparty' => '?',
            'App\\Controller\\CounterpartyController:SearchCounterparty' => '?',
            'App\\Controller\\CounterpartyController:deleteCounterparty' => '?',
            'App\\Controller\\IncomingDocumentsController:Refund' => '?',
            'App\\Controller\\IncomingDocumentsController:SalesIncomingDocuments' => '?',
            'App\\Controller\\IncomingDocumentsController:deleteInvoice' => '?',
            'App\\Controller\\IncomingDocumentsController:searchIncomingDocuments' => '?',
            'App\\Controller\\KuDirController:deleteListInvoiceIdKuDir' => '?',
            'App\\Controller\\KuDirController:editKuDir' => '?',
            'App\\Controller\\KuDirController:kuDir' => '?',
            'App\\Controller\\KuDirController:kuDirSave' => '?',
            'App\\Controller\\KuDirController:manualSavingKuDir' => '?',
            'App\\Controller\\KuDirController:saveEditKuDir' => '?',
            'App\\Controller\\KuDirController:searchKuDir' => '?',
            'App\\Controller\\KuDirController:statusChangesKuDir' => '?',
            'App\\Controller\\PartNoController:deletePart' => '?',
            'App\\Controller\\PartNoController:editPart' => '?',
            'App\\Controller\\PartNoController:savePart' => '?',
            'App\\Controller\\PartNoController:searchPart' => '?',
            'App\\Controller\\PriceController:completeSales' => '?',
            'App\\Controller\\PriceController:deleteSaleList' => '?',
            'App\\Controller\\PriceController:editSoldPrice' => '?',
            'App\\Controller\\PriceController:searchPrice' => '?',
            'App\\Controller\\PriceController:soldPrice' => '?',
            'App\\Controller\\RefundController:EditActivity' => '?',
            'App\\Controller\\RefundController:EditRefund' => '?',
            'App\\Controller\\RefundController:SearchRefund' => '?',
            'App\\Controller\\RefundController:deleteRefund' => '?',
            'App\\Controller\\SalesController:quantityReturnProduct' => '?',
            'App\\Controller\\SalesController:searchSales' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}

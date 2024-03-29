<?php

namespace ContainerBPPB7qk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JjyQsYgService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.JjyQsYg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JjyQsYg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\Sections_header\\IncomingDocumentsController::AddIncomingDocuments' => ['privates', '.service_locator.k0Abh5g', 'get_ServiceLocator_K0Abh5gService', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController::Refund' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesIncomingDocuments' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesParts' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController::deleteInvoice' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Sections_header\\PartNoController::SalesIncomingDocuments' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\Sections_header\\PartNoController::SearchPart' => ['privates', '.service_locator.eJqo_nS', 'get_ServiceLocator_EJqoNSService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController:AddIncomingDocuments' => ['privates', '.service_locator.k0Abh5g', 'get_ServiceLocator_K0Abh5gService', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController:Refund' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController:SalesIncomingDocuments' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController:SalesParts' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\Sections_header\\IncomingDocumentsController:deleteInvoice' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\Sections_header\\PartNoController:SalesIncomingDocuments' => ['privates', '.service_locator.arTJFd8', 'get_ServiceLocator_ArTJFd8Service', true],
            'App\\Controller\\Sections_header\\PartNoController:SearchPart' => ['privates', '.service_locator.eJqo_nS', 'get_ServiceLocator_EJqoNSService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\Sections_header\\IncomingDocumentsController::AddIncomingDocuments' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController::Refund' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesIncomingDocuments' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController::SalesParts' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController::deleteInvoice' => '?',
            'App\\Controller\\Sections_header\\PartNoController::SalesIncomingDocuments' => '?',
            'App\\Controller\\Sections_header\\PartNoController::SearchPart' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController:AddIncomingDocuments' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController:Refund' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController:SalesIncomingDocuments' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController:SalesParts' => '?',
            'App\\Controller\\Sections_header\\IncomingDocumentsController:deleteInvoice' => '?',
            'App\\Controller\\Sections_header\\PartNoController:SalesIncomingDocuments' => '?',
            'App\\Controller\\Sections_header\\PartNoController:SearchPart' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}

<?php

namespace ContainerBzi0ODE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HEJ63K8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hEJ63K8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hEJ63K8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'InvoiceRepository' => ['privates', 'App\\Repository\\InvoiceRepository', 'getInvoiceRepositoryService', true],
            'KuDirRepository' => ['privates', 'App\\Repository\\KuDirRepository', 'getKuDirRepositoryService', true],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'InvoiceRepository' => 'App\\Repository\\InvoiceRepository',
            'KuDirRepository' => 'App\\Repository\\KuDirRepository',
            'validator' => '?',
        ]);
    }
}
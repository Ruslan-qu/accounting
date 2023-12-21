<?php

namespace ContainerOPD7DQI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AOBeOHNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.AOBeOHN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AOBeOHN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'InvoiceRepository' => ['privates', 'App\\Repository\\InvoiceRepository', 'getInvoiceRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'InvoiceRepository' => 'App\\Repository\\InvoiceRepository',
            'doctrine' => '?',
        ]);
    }
}

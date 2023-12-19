<?php

namespace ContainerQ92ZCzE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4vTIIZSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4vTIIZS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4vTIIZS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'SoldRepository' => ['privates', 'App\\Repository\\SoldRepository', 'getSoldRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'SoldRepository' => 'App\\Repository\\SoldRepository',
            'doctrine' => '?',
            'validator' => '?',
        ]);
    }
}

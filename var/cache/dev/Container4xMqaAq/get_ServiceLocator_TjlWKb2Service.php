<?php

namespace Container4xMqaAq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TjlWKb2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tjlWKb2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tjlWKb2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'SoldRepository' => ['privates', 'App\\Repository\\RepositoryPrice\\SoldRepository', 'getSoldRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'SoldRepository' => 'App\\Repository\\RepositoryPrice\\SoldRepository',
            'doctrine' => '?',
            'validator' => '?',
        ]);
    }
}
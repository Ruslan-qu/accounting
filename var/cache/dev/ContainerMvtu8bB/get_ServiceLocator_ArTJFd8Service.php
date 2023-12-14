<?php

namespace ContainerMvtu8bB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ArTJFd8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.arTJFd8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.arTJFd8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'validator' => ['privates', 'debug.validator', 'getDebug_ValidatorService', false],
        ], [
            'doctrine' => '?',
            'validator' => '?',
        ]);
    }
}

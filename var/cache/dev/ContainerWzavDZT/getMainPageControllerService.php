<?php

namespace ContainerWzavDZT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainPageControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Sections_header\MainPageController' shared autowired service.
     *
     * @return \App\Controller\Sections_header\MainPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Sections_header/MainPageController.php';

        $container->services['App\\Controller\\Sections_header\\MainPageController'] = $instance = new \App\Controller\Sections_header\MainPageController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Sections_header\\MainPageController', $container));

        return $instance;
    }
}
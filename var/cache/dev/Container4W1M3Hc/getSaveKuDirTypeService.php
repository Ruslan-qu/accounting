<?php

namespace Container4W1M3Hc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaveKuDirTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\SaveKuDirType' shared autowired service.
     *
     * @return \App\Form\SaveKuDirType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/SaveKuDirType.php';

        return $container->privates['App\\Form\\SaveKuDirType'] = new \App\Form\SaveKuDirType();
    }
}

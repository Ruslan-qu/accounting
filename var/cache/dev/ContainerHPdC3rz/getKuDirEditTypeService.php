<?php

namespace ContainerHPdC3rz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKuDirEditTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FormsKuDir\KuDirEditType' shared autowired service.
     *
     * @return \App\Form\FormsKuDir\KuDirEditType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/FormsKuDir/KuDirEditType.php';

        return $container->privates['App\\Form\\FormsKuDir\\KuDirEditType'] = new \App\Form\FormsKuDir\KuDirEditType();
    }
}
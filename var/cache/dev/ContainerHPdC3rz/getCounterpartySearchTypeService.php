<?php

namespace ContainerHPdC3rz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCounterpartySearchTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FormsCounterparty\CounterpartySearchType' shared autowired service.
     *
     * @return \App\Form\FormsCounterparty\CounterpartySearchType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/FormsCounterparty/CounterpartySearchType.php';

        return $container->privates['App\\Form\\FormsCounterparty\\CounterpartySearchType'] = new \App\Form\FormsCounterparty\CounterpartySearchType();
    }
}

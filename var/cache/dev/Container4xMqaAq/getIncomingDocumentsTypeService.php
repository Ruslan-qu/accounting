<?php

namespace Container4xMqaAq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIncomingDocumentsTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\FormsIncomingDocuments\IncomingDocumentsType' shared autowired service.
     *
     * @return \App\Form\FormsIncomingDocuments\IncomingDocumentsType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/FormsIncomingDocuments/IncomingDocumentsType.php';

        return $container->privates['App\\Form\\FormsIncomingDocuments\\IncomingDocumentsType'] = new \App\Form\FormsIncomingDocuments\IncomingDocumentsType();
    }
}
<?php

namespace ContainerHPdC3rz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecit_ImapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'secit.imap' shared service.
     *
     * @return \SecIT\ImapBundle\Service\Imap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/secit-pl/imap-bundle/Service/Imap.php';

        return $container->services['secit.imap'] = new \SecIT\ImapBundle\Service\Imap($container->parameters['secit.imap.connections']);
    }
}

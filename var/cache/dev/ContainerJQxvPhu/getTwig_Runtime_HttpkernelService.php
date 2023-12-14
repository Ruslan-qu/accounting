<?php

namespace ContainerJQxvPhu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_HttpkernelService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.httpkernel' shared service.
     *
     * @return \Symfony\Bridge\Twig\Extension\HttpKernelRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/HttpKernelRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/DependencyInjection/LazyLoadingFragmentHandler.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Fragment/FragmentUriGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/UriSigner.php';

        $a = ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack());

        return $container->privates['twig.runtime.httpkernel'] = new \Symfony\Bridge\Twig\Extension\HttpKernelRuntime(new \Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'inline' => ['privates', 'fragment.renderer.inline', 'getFragment_Renderer_InlineService', true],
        ], [
            'inline' => '?',
        ]), $a, true), new \Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator('/_fragment', new \Symfony\Component\HttpKernel\UriSigner($container->getEnv('APP_SECRET')), $a));
    }
}

<?php

namespace Container3HnXf9O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActiviteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ActiviteController' shared autowired service.
     *
     * @return \App\Controller\ActiviteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ActiviteController.php';

        $container->services['App\\Controller\\ActiviteController'] = $instance = new \App\Controller\ActiviteController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\ActiviteController', $container));

        return $instance;
    }
}

<?php

namespace Container3HnXf9O;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9Uxl6IFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9Uxl6IF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9Uxl6IF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'competence' => ['privates', '.errored..service_locator.9Uxl6IF.App\\Entity\\Competence', NULL, 'Cannot autowire service ".service_locator.9Uxl6IF": it needs an instance of "App\\Entity\\Competence" but this type has been excluded in "config/services.yaml".'],
        ], [
            'competence' => 'App\\Entity\\Competence',
        ]);
    }
}

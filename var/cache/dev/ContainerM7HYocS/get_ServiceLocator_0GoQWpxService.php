<?php

namespace ContainerM7HYocS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0GoQWpxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0GoQWpx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0GoQWpx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.0GoQWpx.App\\Entity\\Articles', NULL, 'Cannot autowire service ".service_locator.0GoQWpx": it references class "App\\Entity\\Articles" but no such service exists.'],
        ], [
            'article' => 'App\\Entity\\Articles',
        ]);
    }
}

<?php

namespace ContainerX53obL0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PwZ6MTMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pwZ6MTM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pwZ6MTM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService', true],
        ], [
            'passwordEncoder' => '?',
        ]);
    }
}

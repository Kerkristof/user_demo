<?php

namespace ContainerX53obL0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2HCT8aService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2H_CT8a' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2H_CT8a'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'users_repo' => ['privates', 'App\\Repository\\UsersRepository', 'getUsersRepositoryService', true],
        ], [
            'users_repo' => 'App\\Repository\\UsersRepository',
        ]);
    }
}

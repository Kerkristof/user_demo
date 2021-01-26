<?php

namespace ContainerX2eg3an;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArticlesTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ArticlesType' shared autowired service.
     *
     * @return \App\Form\ArticlesType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ArticlesType.php';

        return $container->privates['App\\Form\\ArticlesType'] = new \App\Form\ArticlesType();
    }
}

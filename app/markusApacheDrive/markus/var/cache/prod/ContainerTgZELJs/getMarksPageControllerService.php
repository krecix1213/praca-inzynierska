<?php

namespace ContainerTgZELJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarksPageControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Student\marksPageController' shared autowired service.
     *
     * @return \App\Controller\Student\marksPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Student\\marksPageController'] = $instance = new \App\Controller\Student\marksPageController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Student\\marksPageController', $container));

        return $instance;
    }
}

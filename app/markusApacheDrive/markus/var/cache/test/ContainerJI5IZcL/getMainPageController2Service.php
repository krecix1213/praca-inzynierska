<?php

namespace ContainerJI5IZcL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMainPageController2Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Parent\mainPageController' shared autowired service.
     *
     * @return \App\Controller\Parent\mainPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Parent/mainPageController.php';

        $container->services['App\\Controller\\Parent\\mainPageController'] = $instance = new \App\Controller\Parent\mainPageController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Parent\\mainPageController', $container));

        return $instance;
    }
}

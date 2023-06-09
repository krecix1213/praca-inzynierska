<?php

namespace ContainerJI5IZcL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTeacherEditPageControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\teacherEditPageController' shared autowired service.
     *
     * @return \App\Controller\Admin\teacherEditPageController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/teacherEditPageController.php';

        $container->services['App\\Controller\\Admin\\teacherEditPageController'] = $instance = new \App\Controller\Admin\teacherEditPageController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\Admin\\teacherEditPageController', $container));

        return $instance;
    }
}

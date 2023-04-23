<?php

namespace ContainerTgZELJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getArgumentResolver_ServiceService extends App_KernelProdContainer
{
    /*
     * Gets the private 'argument_resolver.service' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Student\\absencePageController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\mainPageController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\marksPageController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\marksPageController::marks' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\timeTablePageController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\mainPageController::index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\marksPageController::addMarksClass' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\marksPageController::marks' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\marksPageController::marksClass' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\Student\\absencePageController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\mainPageController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\marksPageController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\marksPageController:marks' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Student\\timeTablePageController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\mainPageController:index' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\marksPageController:addMarksClass' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\marksPageController:marks' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'App\\Controller\\Teacher\\marksPageController:marksClass' => ['privates', '.service_locator.T7xmfzk', 'get_ServiceLocator_T7xmfzkService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\Student\\absencePageController::index' => '?',
            'App\\Controller\\Student\\mainPageController::index' => '?',
            'App\\Controller\\Student\\marksPageController::index' => '?',
            'App\\Controller\\Student\\marksPageController::marks' => '?',
            'App\\Controller\\Student\\timeTablePageController::index' => '?',
            'App\\Controller\\Teacher\\mainPageController::index' => '?',
            'App\\Controller\\Teacher\\marksPageController::addMarksClass' => '?',
            'App\\Controller\\Teacher\\marksPageController::marks' => '?',
            'App\\Controller\\Teacher\\marksPageController::marksClass' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\Student\\absencePageController:index' => '?',
            'App\\Controller\\Student\\mainPageController:index' => '?',
            'App\\Controller\\Student\\marksPageController:index' => '?',
            'App\\Controller\\Student\\marksPageController:marks' => '?',
            'App\\Controller\\Student\\timeTablePageController:index' => '?',
            'App\\Controller\\Teacher\\mainPageController:index' => '?',
            'App\\Controller\\Teacher\\marksPageController:addMarksClass' => '?',
            'App\\Controller\\Teacher\\marksPageController:marks' => '?',
            'App\\Controller\\Teacher\\marksPageController:marksClass' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]));
    }
}

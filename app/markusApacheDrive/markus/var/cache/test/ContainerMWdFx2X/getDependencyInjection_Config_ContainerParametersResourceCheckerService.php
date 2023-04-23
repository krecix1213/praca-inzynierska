<?php

namespace ContainerMWdFx2X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDependencyInjection_Config_ContainerParametersResourceCheckerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'dependency_injection.config.container_parameters_resource_checker' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/config/ResourceCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/Config/ContainerParametersResourceChecker.php';

        return $container->privates['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($container);
    }
}

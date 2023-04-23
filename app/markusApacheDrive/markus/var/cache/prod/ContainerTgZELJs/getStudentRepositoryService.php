<?php

namespace ContainerTgZELJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStudentRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\StudentRepository' shared autowired service.
     *
     * @return \App\Repository\StudentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\StudentRepository'] = new \App\Repository\StudentRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}

<?php

namespace ContainerTgZELJs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMarksRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\MarksRepository' shared autowired service.
     *
     * @return \App\Repository\MarksRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\MarksRepository'] = new \App\Repository\MarksRepository(($container->services['doctrine'] ?? $container->load('getDoctrineService')));
    }
}

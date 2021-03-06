<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_PaginatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.paginator' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Search\\Paginator.php';

        return $container->services['easyadmin.paginator'] = new \EasyCorp\Bundle\EasyAdminBundle\Search\Paginator();
    }
}

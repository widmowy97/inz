<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D3KHQE8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.D3KHQE8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.D3KHQE8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'showVisitRepository' => ['privates', 'App\\Repository\\ShowVisitRepository', 'getShowVisitRepositoryService', true],
        ], [
            'showVisitRepository' => 'App\\Repository\\ShowVisitRepository',
        ]);
    }
}

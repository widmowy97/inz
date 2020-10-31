<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDescriptionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\DescriptionController' shared autowired service.
     *
     * @return \App\Controller\DescriptionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
        include_once \dirname(__DIR__, 4).'\\src\\Controller\\DescriptionController.php';

        $container->services['App\\Controller\\DescriptionController'] = $instance = new \App\Controller\DescriptionController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\DescriptionController', $container));

        return $instance;
    }
}
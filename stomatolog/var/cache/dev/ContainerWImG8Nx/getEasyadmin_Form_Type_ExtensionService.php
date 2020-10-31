<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Type_ExtensionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.form.type.extension' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Extension\\EasyAdminExtension.php';

        return $container->privates['easyadmin.form.type.extension'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Extension\EasyAdminExtension(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}

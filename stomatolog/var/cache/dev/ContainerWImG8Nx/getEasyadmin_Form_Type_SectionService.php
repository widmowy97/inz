<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Type_SectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.form.type.section' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminSectionType.php';

        return $container->privates['easyadmin.form.type.section'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminSectionType();
    }
}
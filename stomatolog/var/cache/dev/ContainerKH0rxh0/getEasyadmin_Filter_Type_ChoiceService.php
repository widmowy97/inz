<?php

namespace ContainerKH0rxh0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Filter_Type_ChoiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.filter.type.choice' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ChoiceFilterType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\FilterTypeTrait.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Filter\\Type\\ChoiceFilterType.php';

        return $container->privates['easyadmin.filter.type.choice'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\ChoiceFilterType();
    }
}

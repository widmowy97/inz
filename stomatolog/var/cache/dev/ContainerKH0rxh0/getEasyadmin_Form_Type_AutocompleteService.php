<?php

namespace ContainerKH0rxh0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Form_Type_AutocompleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'easyadmin.form.type.autocomplete' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\AbstractType.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\form\\DataMapperInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Form\\Type\\EasyAdminAutocompleteType.php';

        return $container->privates['easyadmin.form.type.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminAutocompleteType(($container->services['easyadmin.config.manager'] ?? $container->getEasyadmin_Config_ManagerService()));
    }
}

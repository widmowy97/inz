<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEasyadmin_Command_MakeAdminMigrationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'easyadmin.command.make_admin_migration' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\easycorp\\easyadmin-bundle\\src\\Command\\MakeAdminMigrationCommand.php';

        $container->services['easyadmin.command.make_admin_migration'] = $instance = new \EasyCorp\Bundle\EasyAdminBundle\Command\MakeAdminMigrationCommand(($container->services['easyadmin.config.manager'] ?? $container->getEasyadmin_Config_ManagerService()), \dirname(__DIR__, 4));

        $instance->setName('make:admin:migration');

        return $instance;
    }
}
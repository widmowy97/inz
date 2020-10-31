<?php

namespace ContainerWImG8Nx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCronCreateCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'console.command.public_alias.Cron\CronBundle\Command\CronCreateCommand' shared service.
     *
     * @return \Cron\CronBundle\Command\CronCreateCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\symfony\\console\\Command\\Command.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\cron\\cron-bundle\\Cron\\CronCommand.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\cron\\cron-bundle\\Command\\CronCreateCommand.php';

        return $container->services['console.command.public_alias.Cron\\CronBundle\\Command\\CronCreateCommand'] = new \Cron\CronBundle\Command\CronCreateCommand($container);
    }
}

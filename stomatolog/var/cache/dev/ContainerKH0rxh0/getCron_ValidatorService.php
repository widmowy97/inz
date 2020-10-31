<?php

namespace ContainerKH0rxh0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCron_ValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cron.validator' shared service.
     *
     * @return \Cron\Validator\CrontabValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'\\vendor\\cron\\cron\\src\\Validator\\ValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'\\vendor\\cron\\cron\\src\\Validator\\CrontabValidator.php';

        return $container->services['cron.validator'] = new \Cron\Validator\CrontabValidator();
    }
}

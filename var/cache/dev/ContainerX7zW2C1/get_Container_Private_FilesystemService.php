<?php

namespace ContainerX7zW2C1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Container_Private_FilesystemService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public '.container.private.filesystem' shared service.
     *
     * @return \Symfony\Component\Filesystem\Filesystem
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/filesystem/Filesystem.php';

        return $container->services['.container.private.filesystem'] = new \Symfony\Component\Filesystem\Filesystem();
    }
}

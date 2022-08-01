<?php

namespace ContainerI2r6CsU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_PhpCompatUtilService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.php_compat_util' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'PhpCompatUtil.php';

        return $container->privates['maker.php_compat_util'] = new \Symfony\Bundle\MakerBundle\Util\PhpCompatUtil(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')));
    }
}

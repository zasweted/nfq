<?php

namespace ContainerTsTQjZw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YOTy_UMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YOTy.UM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YOTy.UM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ArticleController::edit' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ArticleController::list' => ['privates', '.service_locator.ui9fwdg', 'get_ServiceLocator_Ui9fwdgService', true],
            'App\\Controller\\ArticleController::view' => ['privates', '.service_locator.Mix71J4', 'get_ServiceLocator_Mix71J4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ArticleController:edit' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\ArticleController:list' => ['privates', '.service_locator.ui9fwdg', 'get_ServiceLocator_Ui9fwdgService', true],
            'App\\Controller\\ArticleController:view' => ['privates', '.service_locator.Mix71J4', 'get_ServiceLocator_Mix71J4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ArticleController::edit' => '?',
            'App\\Controller\\ArticleController::list' => '?',
            'App\\Controller\\ArticleController::view' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ArticleController:edit' => '?',
            'App\\Controller\\ArticleController:list' => '?',
            'App\\Controller\\ArticleController:view' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}

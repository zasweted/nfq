<?php

namespace ContainerNXX97QA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4A1_EdOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4A1.edO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4A1.edO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['privates', '.errored.bHePp9g', NULL, 'Cannot determine controller argument for "App\\Controller\\ArticleController::edit()": the $entityManager argument is type-hinted with the non-existent class or interface: "App\\Controller\\EntityManagerInterface". Did you forget to add a use statement?'],
        ], [
            'entityManager' => '?',
        ]);
    }
}
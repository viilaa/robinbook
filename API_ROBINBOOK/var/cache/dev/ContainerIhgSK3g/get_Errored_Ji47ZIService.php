<?php

namespace ContainerIhgSK3g;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_Ji47ZIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.Ji47_zI' shared service.
     *
     * @return \Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\RegisterController::register()": the $passwordEncoder argument is type-hinted with the non-existent class or interface: "Symfony\\Component\\Security\\Core\\Encoder\\UserPasswordEncoderInterface".');
    }
}

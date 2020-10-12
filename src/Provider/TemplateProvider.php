<?php

namespace App\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class TemplateProvider
 * @package App\Provider
 */
class TemplateProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container) : void
    {
        $container['twig'] = function(Container $container) {
            $loader = new \Twig\Loader\FilesystemLoader($container['settings']['twig']['path']);
            $twig = new \Twig\Environment($loader, [
                'cache' => $container['settings']['twig']['cache']
            ]);

            return $twig;
        };
    }
}
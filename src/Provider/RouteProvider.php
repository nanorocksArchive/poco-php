<?php

namespace App\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class RouteProvider
 * @package App\Provider
 */
class RouteProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container) : void
    {
        $container['route'] = function (){
            return new \Bramus\Router\Router();
        };
    }
}
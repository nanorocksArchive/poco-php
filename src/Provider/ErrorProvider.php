<?php

namespace App\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

/**
 * Class ErrorProvider
 * @package App\Provider
 */
class ErrorProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container) : void
    {
        $container['err404'] = function (Container $container){
            echo $container['twig']->render('error/404.twig');
        };
    }
}
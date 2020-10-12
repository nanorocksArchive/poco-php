<?php

namespace App\Provider;

use Illuminate\Database\Capsule\Manager;
use Illuminate\Events\Dispatcher;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class DatabaseProvider implements ServiceProviderInterface
{
    /**
     * @param Container $container
     */
    public function register(Container $container)
    {
        $container['db'] = function ($container) : array
        {
            $capsule = new Manager();
            $capsule->addConnection(
                $container['settings']['mysql'], 'default'
            );

            $capsule->setEventDispatcher(new Dispatcher(\Illuminate\Container\Container::getInstance()));
            $capsule->setAsGlobal();

            $capsule->bootEloquent();

            $conn = $capsule->getConnection('default');

            return [
                'capsule' => $capsule,
                'conn' => $conn
            ];
        };
    }
}
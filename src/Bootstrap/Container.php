<?php

namespace App\Bootstrap;

class Container
{
    /**
     * @var Container $container
     */
    private static $container;

    /**
     * Container constructor.
     */
    private function __construct(){}

    /**
     * @return \Pimple\Container
     */
    public static function get() : \Pimple\Container
    {
        if (self::$container == null)
        {
            self::$container = new \Pimple\Container();
        }

        return self::$container;
    }
}
<?php

namespace App\Persistent;

/**
 * Interface ControllerInterface
 * @package App\Persistent
 */
interface ControllerInterface
{
    /**
     * @return mixed
     */
    public function load();
}
<?php

namespace Pavelutkin\Location;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/web.php');
    }
}
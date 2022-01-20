<?php

namespace Darpan\Lol;

use Illuminate\Support\ServiceProvider;

class LolServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        
    }

}

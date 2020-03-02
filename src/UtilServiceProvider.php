<?php

namespace Fasuto\Util;

use Illuminate\Support\ServiceProvider;

class UtilServiceProvider extends ServiceProvider{
    public function boot(){
        $this->commands([
            Commands\ClearAll::class,
        ]);
    }

    public function register(){

    }
}

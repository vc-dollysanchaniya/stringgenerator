<?php

namespace StringGenerator;

use Illuminate\Support\ServiceProvider;

class UniqueStringGenerator extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $file = __DIR__.'/helper.php';
        if (file_exists($file)) {
            require_once($file);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}

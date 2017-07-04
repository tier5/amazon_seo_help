<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use File;

class WordPressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    protected $bootstrapFilePath = '../../wp-load.php';

    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if(File::exists($this->bootstrapFilePath)) {
            require_once $this->bootstrapFilePath;
        }
    }
}

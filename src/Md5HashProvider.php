<?php

namespace echoBallon\Md5Hash;

use Illuminate\Support\ServiceProvider;

class md5HashProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
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
        //
        $this->app->singleton('md5',function(){
            return new Md5();
        });
    }
}

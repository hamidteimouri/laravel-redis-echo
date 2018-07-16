<?php

namespace App\Providers;

use App\MyClass\MyData;

use Illuminate\Support\ServiceProvider;

class MyDataServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('mydata', function () {
            return new MyData();
        });
    }
}

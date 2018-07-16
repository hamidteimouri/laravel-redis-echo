<?php
namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class MyDataFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mydata';
    }
}
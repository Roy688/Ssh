<?php

namespace Roy688\Ssh\Facades;

use Illuminate\Support\Facades\Facade;

class Ssh extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ssh';
    }
}

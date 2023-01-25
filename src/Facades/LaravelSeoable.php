<?php

namespace VI\LaravelSeoable\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelSeoable extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return 'seoable';
    }

}
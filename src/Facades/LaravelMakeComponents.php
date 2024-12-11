<?php

namespace PNerd\LaravelMakeComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PNerd\LaravelMakeComponents\LaravelMakeComponents
 */
class LaravelMakeComponents extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \PNerd\LaravelMakeComponents\LaravelMakeComponents::class;
    }
}

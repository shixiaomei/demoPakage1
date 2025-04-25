<?php

namespace wojianduanfa\DemoPakage1\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \wojianduanfa\DemoPakage1\DemoPakage1
 */
class DemoPakage1 extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \wojianduanfa\DemoPakage1\DemoPakage1::class;
    }
}

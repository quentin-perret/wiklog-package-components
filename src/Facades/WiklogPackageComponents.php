<?php

namespace Wiklog\WiklogPackageComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wiklog\WiklogPackageComponents\WiklogPackageComponents
 */
class WiklogPackageComponents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Wiklog\WiklogPackageComponents\WiklogPackageComponents::class;
    }
}

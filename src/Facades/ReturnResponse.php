<?php

namespace Soltancode\ReturnResponse\Facades;

use Illuminate\Support\Facades\Facade;
use Soltancode\ReturnResponse\Interfaces\ReturnInterface;

class ReturnResponse extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ReturnInterface::class;
    }

}
<?php

namespace Soltancode\ReturnResponse;

use Illuminate\Support\ServiceProvider;
use Soltancode\ReturnResponse\Interfaces\ReturnInterface;

class ReturnResponseServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(ReturnInterface::class, function() {
            return new ReturnResponse();
        });
    }

    /**
     * @return string[]
     */
    public function provides()
    {
        return array('ReturnResponse');
    }
}
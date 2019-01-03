<?php

namespace Seymuromarov\Dater\Facades;

Use Illuminate\Support\Facades\Facade;

class Dater extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'seymuromarov-dater';
    }

}
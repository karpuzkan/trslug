<?php
namespace Karpuzkan\Trslug\Facades;

use Illuminate\Support\Facades\Facade;

class Trslug extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'Trslug';
    }
}
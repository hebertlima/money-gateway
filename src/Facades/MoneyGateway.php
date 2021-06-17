<?php

namespace Hdelima\MoneyGateway\Facades;

use Illuminate\Support\Facades\Facade;

class MoneyGateway extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Hdelima\MoneyGateway\MoneyGatewayFacadeAccessor';
    }
}

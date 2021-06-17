<?php
namespace Hdelima\MoneyGateway;

use Exception;
use Hdelima\MoneyGateway\Services\MoneyGateway as MoneyGatewayClient;

class MoneyGatewayFacadeAccessor
{
    public static $provider;

	public static function getProvider()
	{
		return self::$provider;
	}

	public static function setProvider()
	{
		self::$provider = new MoneyGatewayClient();

		return self::getProvider();
	}
}

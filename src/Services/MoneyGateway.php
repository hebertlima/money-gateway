<?php

namespace Hdelima\MoneyGateway\Services;

use Exception;
use Hdelima\MoneyGateway\Traits\MoneyGatewayConfig;

class MoneyGateway
{
    use MoneyGatewayConfig;

	public function __construct( $config = '')
	{
		if ( is_array( $config ) )
			$this->setConfig( $config );
	}

	public function setOptions( $credentials )
	{
		// $this->config['']
	}
}

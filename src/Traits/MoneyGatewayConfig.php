<?php
namespace Hdelima\MoneyGateway\Traits;

use RuntimeException;

trait MoneyGatewayConfig
{
	private $config;

	public function setCredentials( $credentials )
	{
		if( empty( $credentials ) )
			throw new RuntimeException('Empty configuration provided. Please provide valid configuration for MoneyGateway.');

		$this->setProviderConfig( $credentials );
	}

	public function setConfig( array $config = [])
	{
		$config = function_exists('config') ? config('moneygateway') : $config;

        $this->config = $config;

		$this->setCredentials( $config );
	}

	private function setProviderConfig( $credentials )
	{
		$this->setOptions( $credentials );
	}
}

<?php

namespace rocketfellows\SoapClientFactory;

use SoapClient;

class SoapClientFactory
{
    public function create(string $wsdl, ?array $options = []): SoapClient
    {
        return new SoapClient(
            $wsdl,
            $options
        );
    }
}

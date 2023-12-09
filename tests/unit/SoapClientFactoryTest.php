<?php

namespace rocketfellows\SoapClientFactory\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\SoapClientFactory\SoapClientFactory;

/**
 * @group soap-client-factory
 */
class SoapClientFactoryTest extends TestCase
{
    private $soapClientFactory;

    protected function setUp(): void
    {
        parent::setUp();

        $this->soapClientFactory = new SoapClientFactory();
    }
}

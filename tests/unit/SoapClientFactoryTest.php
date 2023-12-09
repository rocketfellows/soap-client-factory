<?php

namespace rocketfellows\SoapClientFactory\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\SoapClientFactory\SoapClientFactory;
use SoapClient;
use SoapFault;

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

    public function testCreateSoapClientThrowsSoapFaultError(): void
    {
        $this->expectException(SoapFault::class);

        $this->soapClientFactory->create('foo');
    }

    /**
     * @dataProvider getSoapClientProvidedData
     */
    public function testSuccessCreateSoapClient(string $wsdl, array $options): void
    {
        $this->assertInstanceOf(SoapClient::class, $this->soapClientFactory->create($wsdl, $options));
    }

    public function getSoapClientProvidedData(): array
    {
        return [
            'vies check vat test service connection data' => [
                'wsdl' => 'https://ec.europa.eu/taxation_customs/vies/checkVatTestService.wsdl',
                'options' => [],
            ],
        ];
    }
}

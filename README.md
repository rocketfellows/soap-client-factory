# PHP SoapClient factory.

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
![PHPStan Badge](https://img.shields.io/badge/PHPStan-level%205-brightgreen.svg?style=flat)

PHP SOAP client factory - is a wrapper around PHP `SoapClient` initialization.
Initialization of the client when the create function is called, and not at the time of instantiation of the dependency.

More about PHP `SoapClient` here: https://www.php.net/manual/en/class.soapclient.php.

## Installation.

```shell
composer require rocketfellows/soap-client-factory
```

## Package details.

Component composition:
- `SoapClientFactory` - factory for creating PHP `SoapClient` with given parameters.

`SoapClientFactory` functions:
- `public function create(string $wsdl, ?array $options = []): SoapClient` - factory-function takes as parameters the string `$wsdl` (URI of the WSDL file or NULL if working in non-WSDL mode) and an optional array of parameters `$options`. More details about the parameters at https://www.php.net/manual/en/class.soapclient.php.

Throwable exceptions:
- `SoapFault` - https://www.php.net/manual/ru/class.soapfault.php.

## Usage example.

Create instance of `SoapClientFactory` and call `create` function with arguments for PHP `SoapClient`:

```php
$client = (new SoapClientFactory())->create('test.wsdl');
```

## Contributing.

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.

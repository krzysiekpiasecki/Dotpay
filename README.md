# Dotpay Middlewares 

[![Build Status](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/badges/build.png?b=master)](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/?branch=master)
[![Code Intelligence Status](https://scrutinizer-ci.com/g/krzysiekpiasecki/Dotpayds/badges/code-intelligence.svg?b=master)](https://scrutinizer-ci.com/code-intelligence)

Middlewares for worldwilde payments implementation. Dotpay is the most comprehensive online worldwilde payments solution dedicated for polish ecommerce.

# API

Are you interested in more details? [Here's the complete documentation of API](https://krzysiekpiasecki.github.io/Dotpayds/).

# Using the middlewares

### Install

Dotpayds is distributed via [Composer](https://getcomposer.org) and [Packagist](https://packagist.org/packages/krzysiekpiasecki/dotpay).

```php
composer require krzysiekpiasecki/dotpay
```

## Payment Middleware

Custom domain payment handler must implement only the interface 
```\Dotpay\Server\Handler\PaymentHandlerInterface```. You have to use it at least for persisting client payments,
before redirecting the client to the payment gateway. 

```php
class BusinessPaymentHandler implements \Dotpay\Server\Handler\PaymentHandlerInterface
{
    public function handle(Payment $payment)
    {
        // TODO: Implement handle() method.
    }
}
```

After implementing the handler, create [PSR-15](https://www.php-fig.org/psr/psr-15/) compatible request object, for example using [Zend Diactoros](https://github.com/zendframework/zend-diactoros) component.

```php
$psrRequest = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_GET,
    $_POST
);
```

At the end, call the payment middleware to execute your own payment handler and then to send a redirect response
to the client using for example [Zend Diactoros](https://github.com/zendframework/zend-diactoros) component.

```php
$paymentMiddleware = new \Dotpay\Server\Payment();

$httpResponse = $paymentMiddleware->process(
    $psrRequest,
    new \Dotpay\Server\Handler\DefaultPaymentHandler(
        '747789',
        'Np3n4QmXxp6MOTrLCVs905fdrGf3QIGm',
        new BusinessPaymentHandler()
    )
);

$emitter = new \Zend\Diactoros\Response\SapiEmitter();
$emitter->emit($httpResponse);
```

## URLC Middleware

Custom domain URLC handler must implement only the interface 
```\Dotpay\Server\Handler\URLCHandlerInterface```. You have to use it to confirm 
transaction complete or handle status changing.

```php
class BusinessURLCHandler implements \Dotpay\Server\Handler\URLCHandlerInterface
{
    public function handle(\Dotpay\Response\URLC $URLC)
    {
        // TODO: Implement handle() method.
    }
}
```

After implementing the handler, create [PSR-15](https://www.php-fig.org/psr/psr-15/) compatible request object, for example with [Zend Diactoros](https://github.com/zendframework/zend-diactoros) component.

```php
$psrRequest = \Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_POST
);
```

At the end, call the URLC middleware to execute your own URLC handler and then send a response "OK" to Dotpay,
when the transaction was handled correctly, using for example [Zend Diactoros](https://github.com/zendframework/zend-diactoros)component.

```php
$urlcMiddleware = new \Dotpay\Server\Payment();

$httpResponse = $urlcMiddleware->process(
    $psrRequest, 
    new \Dotpay\Server\Handler\DefaultURLCHandler(
        'Np3n4QmXxp6MOTrLCVs905fdrGf3QIGm',
        new BusinessURLCHandler()
    )
);

$emitter = new \Zend\Diactoros\Response\SapiEmitter();
$emitter->emit($httpResponse);
```

## Error Code Middleware

Custom domain handler for getting error codes from Dotpay server
must implement only the interface ```\Dotpay\Server\Handler\ErrorCodeHandlerInterface.

```php
class BusinessErrorCodeHandler implements \Dotpay\Server\Handler\ErrorCodeHandlerInterface  {
    public function handle(string $errorCode)
    {
        // TODO: Implement handle() method with custom logic
    }
}
```

After implementing the handler, create [PSR-15](https://www.php-fig.org/psr/psr-15/) compatible request object, for example with [Zend Diactoros](https://github.com/zendframework/zend-diactoros) component.

```php
$psrRequest = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_GET
);
```

At the end, call the error code middleware to execute your own error code handler.


```php
$errorCodeMiddleware = new \Dotpay\Server\ErrorCode();

$httpResponse = $errorCodeMiddleware->process(
     $psrRequest,
     new \Dotpay\Server\Handler\DefaultErrorCodeHandler(
         new BusinessErrorCodeHandler()
     )
);
```

# Dotpay for Developers

See [Dotpay Technical Manual For Payments Implementation](https://ssl.dotpay.pl/s2/login/cloudfs1/magellan_media/common_file/dotpay_technical_manual_for_payments_implementation.pdf) for more details.

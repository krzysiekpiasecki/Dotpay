<?php

declare(strict_types=1);

namespace Dotpay\Request;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Request\PaymentURL
 */
class PaymentURLTest extends TestCase
{
    public function testBasicPaymentURL()
    {
        $payment = new Payment();
        $payment->id = "123456";
        $payment->amount = "12.42";
        $payment->currency = "EUR";
        $payment->description = "It's a basic payment";
        $payment->chk = (new PaymentChecksum($payment, "8192"))->__toString();

        $url = new PaymentURL("https://ssl.dotpay.pl/t2/", $payment);
        $this->assertSame(
            $url->getURL(),
            "https://ssl.dotpay.pl/t2/?id=123456&amount=12.42&currency=EUR&description=It%27s%20a%20basic%20payment&ch_lock=0&chck=054a8d4d9a99d265cced4924158a178b772558fde958bf056792875767b77d19"
        );

    }
}
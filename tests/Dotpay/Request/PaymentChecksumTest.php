<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request;

use Dotpay\Fake\FakePayment;
use PHPUnit\Framework\TestCase;

/**
 * CHKTest tests.
 *
 * @coversDefaultClass \Dotpay\Request\PaymentChecksum
 */
class PaymentChecksumTest extends TestCase
{
    /**
     * @covers ::__construct()
     * @covers ::__toString()
     * @covers ::getChecksum()
     */
    public function testChecksum()
    {
        $payment = new \Dotpay\Request\Payment();
        $payment->id = '747789';
        $payment->api_version = 'dev';
        $payment->amount = '100.00';
        $payment->currency = 'PLN';
        $payment->description = 'Platnosc za zamowienie 567915976';
        $payment->URL = 'https://www.example.com/thanks_page.php';
        $payment->type = '0';
        $payment->buttontext = 'Wroc do www.example.com';
        $payment->URLC = 'https://www.example.com/urlc_receiver.php';
        $payment->control = 'M1231MzaUdLQWR3';
        $payment->firstname = 'Jan';
        $payment->lastname = 'Nowak';
        $payment->email = 'jan.nowak@example.com';
        $payment->street = 'Warszawska';
        $payment->street_n1 = '1';
        $payment->city = 'Krakow';
        $payment->postcode = '12-345';
        $payment->phone = '123456789';
        $payment->country = 'POL';
        $payment->ignore_last_payment_channel = 'true';

        $this->assertSame(
            '74505a4c8a479cfd878aed96fe6db2deccb90b78e6a773be1e8a7b34ad7c8f86',
            (new PaymentChecksum($payment, 'YUTxSl8lE4cWx0gjUT2L1MW2MBqkvj98'))->getChecksum()
        );
    }
}

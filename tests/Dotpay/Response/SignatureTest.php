<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response;

use Dotpay\Fake\FakeURLC;
use PHPUnit\Framework\TestCase;

/**
 * ResponseSignature test.
 *
 * @coversDefaultClass \Dotpay\Response\ResponseSignature
 */
class SignatureTest extends TestCase
{
    /**
     * @covers ::__construct()
     * @covers ::signature()
     */
    public function testSignature()
    {
        $urlc = new URLC();
        $urlc->id = '747789';
        $urlc->operation_number = 'M1234-5678';
        $urlc->operation_type = 'payment';
        $urlc->operation_status = 'completed';
        $urlc->operation_amount = '177.27';
        $urlc->operation_currency = 'PLN';
        $urlc->operation_withdrawal_amount = '176.00';
        $urlc->operation_commission_amount = '-1.27';
        $urlc->is_completed = 'true';
        $urlc->operation_original_amount = '42.82';
        $urlc->operation_original_currency = 'EUR';
        $urlc->operation_datetime = '2014-06-01 12:06:37';
        $urlc->operation_related_number = 'M1234-5678';
        $urlc->control = 'ec4bf09d3dbe0cb71e6abc3ea44a7273';
        $urlc->description = 'Faktura VAT 120/2014';
        $urlc->email = 'jan.nowak@example.com';
        $urlc->p_info = 'Capgeminix';
        $urlc->p_email = 'biuro@capgeminix.pl';
        $urlc->credit_card_issuer_identification_number = '603753';
        $urlc->credit_card_masked_number = 'XXXX XXXX XXXX 6214';
        $urlc->credit_card_brand_codename = 'visa';
        $urlc->credit_card_brand_code = 'Visa';
        $urlc->credit_card_id = '59f92e2bf8bedc36bec2219862448dd54dd19490de526e217589b37f43dc3eb2a4df294e71829a239eb7432d0eebbdad4c58eb13d6333ce71369184eb7ab02ae';
        $urlc->channel = '248';
        $urlc->channel_country = 'POL';
        $urlc->geoip_country = 'POL';
        $urlc->signature = '8363bf09482951fd69d76621cba469662a17205eee2c35097fd929023f573695';


        $signature = (new Signature($urlc, 'Np3n4QmXxp6MOTrLCVs905fdrGf3QIGm'))->getSignature();

        $this->assertSame(
            $signature,
            '8363bf09482951fd69d76621cba469662a17205eee2c35097fd929023f573695',
            sprintf(
                'Expected URLC signature "%s" but was "%s"',
                '8363bf09482951fd69d76621cba469662a17205eee2c35097fd929023f573695',
                $signature
            )
        );
    }
}

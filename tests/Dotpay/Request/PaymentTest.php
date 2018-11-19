<?php

declare(strict_types=1);

namespace Dotpay\Request;

use PHPUnit\Framework\TestCase;

/**
 * Payment tests.
 *
 * @coversDefaultClass \Dotpay\Request\Payment
 */
class PaymentTest extends TestCase
{
    /**
     * @param string $property Property name
     * @dataProvider provideProperties
     */
    public function testAvailableProperties(string $property)
    {
        $this->assertTrue(
            property_exists(Payment::class, $property),
            sprintf(
                'Expected property "%s" to exist in Payment class',
                $property
            )
        );
    }

    /**
     * Provide list of available properties in Payment class.
     *
     * @return array
     */
    public function provideProperties(): array
    {
        return [
            ['api_version', ''],
            ['id', ''],
            ['amount', ''],
            ['currency', ''],
            ['description', ''],
            ['chk', ''],
            ['channel', ''],
            ['ch_lock', ''],
            ['ignore_last_payment_channel', ''],
            ['channel_groups', ''],
            ['URL', ''],
            ['type', ''],
            ['buttontext', ''],
            ['bylaw', ''],
            ['personal_data', ''],
            ['URLC', ''],
            ['expiration_date', ''],
            ['control', ''],
            ['firstname', ''],
            ['lastname', ''],
            ['email', ''],
            ['street', ''],
            ['street_n1', ''],
            ['street_n1', ''],
            ['state', ''],
            ['addr3', ''],
            ['city', ''],
            ['postcode', ''],
            ['phone', ''],
            ['country', ''],
            ['lang', ''],
            ['deladdr', ''],
            ['p_info', ''],
            ['p_email', ''],
            ['blik_code', ''],
        ];
    }
}

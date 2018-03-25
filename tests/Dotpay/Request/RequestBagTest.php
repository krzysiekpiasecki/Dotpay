<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request;

use PHPUnit\Framework\TestCase;

/**
 * RequestBag tests.
 *
 * @coversDefaultClass \Dotpay\Request\RequestBag
 */
class RequestBagTest extends TestCase
{
    /**
     * @param string $property Property name
     * @dataProvider provideAvailableProperties
     */
    public function testAvailableProperties(string $property)
    {
        $this->assertTrue(
            property_exists(RequestBag::class, $property),
            sprintf(
                'Expected property "%s" to exist in RequestBag',
                $property
            )
        );
    }

    public function testPropertiesCount()
    {
        $this->assertSame(
            35,
            count(get_class_vars(RequestBag::class)),
            'Invalid count of RequestBag properties'
        );
    }

    /**
     * Provide list of available properties in RequestBag class.
     *
     * @return array
     */
    public function provideAvailableProperties(): array
    {
        return [
            ['api_version'],
            ['id'],
            ['amount'],
            ['currency'],
            ['description'],
            ['lang'],
            ['channel'],
            ['ch_lock'],
            ['ignore_last_payment_channel'],
            ['channel_groups'],
            ['URL'],
            ['type'],
            ['buttontext'],
            ['bylaw'],
            ['personal_data'],
            ['URLC'],
            ['expiration_date'],
            ['control'],
            ['firstname'],
            ['lastname'],
            ['email'],
            ['street'],
            ['street_n1'],
            ['street_n2'],
            ['state'],
            ['addr3'],
            ['city'],
            ['postcode'],
            ['phone'],
            ['country'],
            ['deladdr'],
            ['p_info'],
            ['p_email'],
            ['blik_code'],
            ['chk'],
        ];
    }
}

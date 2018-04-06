<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Response;

use PHPUnit\Framework\TestCase;

/**
 * URLC tests.
 *
 * @coversDefaultClass \Dotpay\Response\URLC
 */
class ResponseBagTest extends TestCase
{
    /**
     * @param string $property Property name
     * @dataProvider provideAvailableProperties
     */
    public function testAvailableProperties(string $property)
    {
        $this->assertTrue(
            property_exists(URLC::class, $property),
            sprintf(
                'Expected property "%s" to exist in URLC',
                $property
            )
        );
    }

    public function testPropertiesCount()
    {
        $this->assertSame(
            27,
            count(get_class_vars(URLC::class)),
            'Invalid count of URLC properties'
        );
    }

    /**
     * Provide list of available properties in Payment class.
     *
     * @return array
     */
    public function provideAvailableProperties(): array
    {
        return [
            ['id'],
            ['operation_number'],
            ['operation_type'],
            ['operation_status'],
            ['operation_amount'],
            ['operation_currency'],
            ['operation_withdrawal_amount'],
            ['operation_commission_amount'],
            ['is_completed'],
            ['operation_original_amount'],
            ['operation_original_currency'],
            ['operation_datetime'],
            ['operation_related_number'],
            ['control'],
            ['description'],
            ['email'],
            ['p_info'],
            ['p_email'],
            ['credit_card_issuer_identification_number'],
            ['credit_card_masked_number'],
            ['credit_card_brand_codename'],
            ['credit_card_brand_code'],
            ['credit_card_id'],
            ['channel'],
            ['channel_country'],
            ['geoip_country'],
            ['signature'],
        ];
    }
}

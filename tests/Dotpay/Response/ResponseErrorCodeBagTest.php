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
 * ResponseErrorCodeBag tests.
 *
 * @coversDefaultClass \Dotpay\Response\ResponseErrorCodeBag
 */
class ResponseErrorCodeBagTest extends TestCase
{
    /**
     * @param string $property Property name
     * @dataProvider provideAvailableProperties
     */
    public function testAvailableProperties(string $property)
    {
        $this->assertTrue(
            property_exists(ResponseErrorCodeBag::class, $property),
            sprintf(
                'Expected property "%s" to exist in ResponseErrorCodeBag',
                $property
            )
        );
    }

    public function testPropertiesCount()
    {
        $this->assertSame(
            1,
            count(get_class_vars(ResponseErrorCodeBag::class)),
            'Invalid count of ResponseErrorCodeBag properties'
        );
    }

    /**
     * Provide list of available properties in ResponseErrorCodeBag class.
     *
     * @return array
     */
    public function provideAvailableProperties(): array
    {
        return [
            ['error_code'],
        ];
    }
}

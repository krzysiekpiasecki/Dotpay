<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response;

use PHPUnit\Framework\TestCase;

/**
 * ResponseErrorBag tests.
 *
 * @coversDefaultClass \Dotpay\Response\ResponseErrorBag
 */
class ResponseErrorBagTest extends TestCase
{
    /**
     * @param string $property Property name
     * @dataProvider provideAvailableProperties
     */
    public function testAvailableProperties(string $property)
    {
        $this->assertTrue(
            property_exists(ResponseErrorBag::class, $property),
            sprintf(
                'Expected property "%s" to exist in ResponseErrorBag',
                $property
            )
        );
    }

    public function testPropertiesCount()
    {
        $this->assertSame(
            1,
            count(get_class_vars(ResponseErrorBag::class)),
            'Invalid count of ResponseErrorBag properties'
        );
    }

    /**
     * Provide list of available properties in ResponseErrorBag class.
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
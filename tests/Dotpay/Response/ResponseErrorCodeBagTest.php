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
 * ErrorCode tests.
 *
 * @coversDefaultClass \Dotpay\Response\ErrorCode
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
            property_exists(ErrorCode::class, $property),
            sprintf(
                'Expected property "%s" to exist in ErrorCode',
                $property
            )
        );
    }

    public function testPropertiesCount()
    {
        $this->assertSame(
            1,
            count(get_class_vars(ErrorCode::class)),
            'Invalid count of ErrorCode properties'
        );
    }

    /**
     * Provide list of available properties in ErrorCode class.
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

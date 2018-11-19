<?php

declare(strict_types=1);

namespace Dotpay\Response;

use PHPUnit\Framework\TestCase;

/**
 * Error tests.
 *
 * @coversDefaultClass \Dotpay\Response\Error
 */
class ErrorTest extends TestCase
{
    /**
     * @param string $property Property name
     * @dataProvider provideAvailableProperties
     */
    public function testAvailableProperties(string $property)
    {
        $this->assertTrue(
            property_exists(Error::class, $property),
            sprintf(
                'Expected property "%s" to exist in Error',
                $property
            )
        );
    }

    /**
     * Provide list of available properties in Error class.
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

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

namespace Dotpay\Credentials;

use PHPUnit\Framework\TestCase;

/**
 * CredentialsTest tests.
 *
 * @coversDefaultClass \Dotpay\Credentials\Credentials
 */
class CredentialsTest extends TestCase
{
    /**
     * @covers ::pin()
     */
    public function testPin()
    {
        $credentials = new Credentials('876234', 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->pin(),
            'asdfsdf#()$(#)FSDFDF'
        );
    }

    /**
     * @covers ::id()
     */
    public function testId()
    {
        $credentials = new Credentials('876234', 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->id(),
            '876234'
        );
    }
}

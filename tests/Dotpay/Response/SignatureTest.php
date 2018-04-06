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
        $signature = (new Signature(new FakeURLC(), 'Np3n4QmXxp6MOTrLCVs905fdrGf3QIGm'))->signature();

        $this->assertSame(
            $signature,
            '4e3f76e666abd6c9c25097f648c37148fef0b5c8caf7ba134746519362c83f11',
            sprintf(
                'Expected URLC signature "%s" but was "%s"',
                '4e3f76e666abd6c9c25097f648c37148fef0b5c8caf7ba134746519362c83f11',
                $signature
            )
        );
    }
}

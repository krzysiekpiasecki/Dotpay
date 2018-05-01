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
        $signature = (new Signature(new FakeURLC(), 'Np3n4QmXxp6MOTrLCVs905fdrGf3QIGm'))->signature();

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

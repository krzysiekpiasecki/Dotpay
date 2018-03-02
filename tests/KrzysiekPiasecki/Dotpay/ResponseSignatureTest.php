<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay;

use KrzysiekPiasecki\Dotpay\Fake\FakeResponseBag;
use PHPUnit\Framework\TestCase;

/**
 * ResponseSignature test.
 *
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\ResponseSignature
 */
class ResponseSignatureTest extends TestCase
{
    /**
     * @covers ::__construct()
     * @covers ::signature()
     */
    public function testSignature()
    {
        $signature = (new ResponseSignature(new FakeResponseBag(), 'Np3n4QmXxp6MOTrLCVs905fdrGf3QIGm'))->signature();

        $this->assertSame(
            $signature,
            '4e3f76e666abd6c9c25097f648c37148fef0b5c8caf7ba134746519362c83f11',
            sprintf(
                'Expected ResponseBag signature "%s" but was "%s"',
                '4e3f76e666abd6c9c25097f648c37148fef0b5c8caf7ba134746519362c83f11',
                $signature
            )
        );
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request;

use Dotpay\Fake\FakePayment;
use PHPUnit\Framework\TestCase;

/**
 * CHKTest tests.
 *
 * @coversDefaultClass \Dotpay\Request\CHKTest
 */
class CHKTest extends TestCase
{
    /**
     * @covers ::__construct()
     * @covers ::__toString()
     */
    public function testCheksum()
    {
        $this->assertSame(
            '74505a4c8a479cfd878aed96fe6db2deccb90b78e6a773be1e8a7b34ad7c8f86',
            (new CHK(new FakePayment(), 'YUTxSl8lE4cWx0gjUT2L1MW2MBqkvj98'))->__toString()
        );
    }
}

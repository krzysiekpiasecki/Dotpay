<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request;

use Dotpay\Fake\FakeRequestBag;
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
            '1fa8c0cae4a2e0cfddee1fe337d0cfb6767b524130d056eb5738e3d04c5e4132',
            (new CHK(new FakeRequestBag(), 'YUTxSl8lE4cWx0gjUT2L1MW2MBqkvj98'))->__toString()
        );
    }
}

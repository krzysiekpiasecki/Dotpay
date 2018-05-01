<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Server;

use PHPUnit\Framework\TestCase;

/**
 * Payment test.
 *
 * @coversDefaultClass \Dotpay\Server\Payment
 */
class PaymentTest extends TestCase
{
    /**
     * @covers ::__construct()
     */
    public function testConstruct()
    {
        $this->assertNotNull(new Payment());
    }
}

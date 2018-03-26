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

namespace Dotpay\Environment;

use PHPUnit\Framework\TestCase;

/**
 * Pin tests.
 *
 * @coversDefaultClass \Dotpay\Environment\Pin
 */
class PinTest extends TestCase
{
    /**
     * @covers ::__construct()
     */
    public function testPin()
    {
        $pin = new Pin('876234');
        $this->assertSame(
            $pin->__toString(),
            '876234'
        );
    }
}

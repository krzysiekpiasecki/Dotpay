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

namespace Dotpay\Server;

use PHPUnit\Framework\TestCase;

/**
 * URLC test.
 *
 * @coversDefaultClass \Dotpay\Server\URLC
 */
class URLCTest extends TestCase
{
    /**
     * @covers ::__construct()
     */
    public function testConstruct()
    {
        $this->assertNotNull(new URLC());
    }
}

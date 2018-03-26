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
 * Error test.
 *
 * @coversDefaultClass \Dotpay\Server\Error
 */
class ErrorTest extends TestCase
{
    /**
     * @covers ::__construct()
     */
    public function testConstruct()
    {
        $this->assertNotNull(new Error());
    }
}

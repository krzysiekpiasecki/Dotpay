<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay;

use PHPUnit\Framework\TestCase;

/**
 * CredentialsTest tests.
 *
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Credentials
 */
class CredentialsTest extends TestCase
{
    /**
     * @covers ::pin()
     */
    public function testPin()
    {
        $credentials = new Credentials(876234, 'asdfsdf#()$(#)FSDFDF');
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
        $credentials = new Credentials(876234, 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->id(),
            876234
        );
    }
}

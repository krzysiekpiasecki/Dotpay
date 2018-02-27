<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay\Credentials;

use PHPUnit\Framework\TestCase;

/**
 * Credentials tests {@see \KrzysiekPiasecki\Dotpay\Credentials\Credentials}.
 *
 * @coversNothing
 */
class CredentialsTest extends TestCase
{
    public function testPin()
    {
        $credentials = new Credentials(876234, 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->pin(),
            'asdfsdf#()$(#)FSDFDF'
        );
    }

    public function testId()
    {
        $credentials = new Credentials(876234, 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->id(),
            876234
        );
    }
}

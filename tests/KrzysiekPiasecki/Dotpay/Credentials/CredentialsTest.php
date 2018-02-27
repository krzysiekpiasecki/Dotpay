<?php
namespace KrzysiekPiasecki\Dotpay\Credentials;

use PHPUnit_Framework_TestCase;
use KrzysiekPiasecki\Dotpay\Credentials\Credentials;

/**
 * Credentials tests {@see \KrzysiekPiasecki\Dotpay\Credentials\Credentials}
 */
class CredentialsTest extends PHPUnit_Framework_TestCase
{

    public function testPin() {
        $credentials = new Credentials(876234, 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->pin(),
            'asdfsdf#()$(#)FSDFDF'
        );
    }

    public function testId() {
        $credentials = new Credentials(876234, 'asdfsdf#()$(#)FSDFDF');
        $this->assertSame(
            $credentials->id(),
            876234
        );
    }

}
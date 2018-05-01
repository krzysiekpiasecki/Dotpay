<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\IdValidator;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\Constraint\IdConstraint
 */
class IdConstraintTest extends \PHPUnit\Framework\TestCase
{
    public function testMessageProperty()
    {
        $this->assertSame(
            'The value {{ value }} is not a valid \'id\' parameter',
            (new IdConstraint())->message
        );
    }

    /**
     * @covers ::__construct()
     */
    public function test__construct()
    {
        $this->assertSame(
            'The value {{ value }} is not a valid \'id\' parameter',
            (new IdConstraint())->message
        );
        $this->assertSame(
            '/^[1-9][0-9]{0,5}$/',
            (new IdConstraint())->pattern
        );
    }

    /**
     * @covers ::validateBy
     */
    public function testValidatedBy()
    {
        $this->assertSame(
            (new IdConstraint())->validatedBy(),
            IdValidator::class
        );
    }
}

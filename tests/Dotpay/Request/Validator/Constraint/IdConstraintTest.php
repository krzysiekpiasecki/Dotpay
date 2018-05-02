<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\IdValidator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\Constraint\IdConstraint
 */
class IdConstraintTest extends TestCase
{
    public function testMessage()
    {
        $this->assertSame(
            'The value {{ value }} is not a valid \'id\' parameter',
            (new IdConstraint())->message
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

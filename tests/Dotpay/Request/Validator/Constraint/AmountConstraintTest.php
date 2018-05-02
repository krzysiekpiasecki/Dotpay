<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\AmountValidator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\Constraint\AmountConstraint
 */
class AmountConstraintTest extends TestCase
{
    public function testMessage()
    {
        $this->assertSame(
            'The value {{ value }} is not a valid \'amount\' parameter',
            (new AmountConstraint())->message
        );
    }

    /**
     * @covers ::validateBy
     */
    public function testValidatedBy()
    {
        $this->assertSame(
            (new AmountConstraint())->validatedBy(),
            AmountValidator::class
        );
    }
}

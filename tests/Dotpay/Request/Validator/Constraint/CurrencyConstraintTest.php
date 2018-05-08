<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\CurrencyValidator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\Constraint\CurrencyConstraint
 */
class CurrencyConstraintTest extends TestCase
{
    public function testMessage()
    {
        $this->assertSame(
            'The value {{ value }} is not a valid \'currency\' parameter',
            (new CurrencyConstraint())->message
        );
    }

    /**
     * @covers ::validateBy
     */
    public function testValidatedBy()
    {
        $this->assertSame(
            (new CurrencyConstraint())->validatedBy(),
            CurrencyValidator::class
        );
    }
}

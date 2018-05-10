<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\DescriptionValidator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\Constraint\DescriptionConstraint
 */
class DescriptionConstraintTest extends TestCase
{

    /**
     * @covers ::validateBy
     */
    public function testValidatedBy()
    {
        $this->assertSame(
            (new DescriptionConstraint())->validatedBy(),
            DescriptionValidator::class
        );
    }
}

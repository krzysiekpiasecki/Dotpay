<?php

declare(strict_types=1);

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\ApiVersionValidator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\Constraint\ApiVersionConstraint
 */
class ApiVersionConstraintTest extends TestCase
{
    public function testMessage()
    {
        $this->assertSame(
            'The value {{ value }} is not a valid \'api_version\' parameter',
            (new ApiVersionConstraint())->message
        );
    }

    /**
     * @covers ::validateBy
     */
    public function testValidateBy()
    {
        $this->assertSame(
            (new ApiVersionConstraint())->validatedBy(),
            ApiVersionValidator::class
        );
    }
}

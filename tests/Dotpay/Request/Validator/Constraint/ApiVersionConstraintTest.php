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

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\ApiVersionValidator;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Dotpay\Validator\Constraint\ApiVersionConstraint
 */
class ApiVersionConstraintTest extends TestCase
{
    public function testMessageProperty()
    {
        $expectedMessage = 'The value {{ api_version }} is not a valid \'api_version\' parameter';
        $constraintMessage = (new ApiVersionConstraint())->message;
        $this->assertSame(
            $expectedMessage,
            $constraintMessage,
            sprintf(
                'Expected %s to be a message for ApiVersionConstraint, but was %s',
                $expectedMessage,
                $constraintMessage
            )
        );
    }

    /**
     * @covers ::validateBy
     */
    public function testValidateBy()
    {
        $validateBy = (new ApiVersionConstraint())->validatedBy();
        $this->assertSame(
            $validateBy,
            ApiVersionValidator::class,
            sprintf(
                'Expected %s to be a validator against ApiVersionConstraint, but was %s',
                ApiVersionValidator::class,
                $validateBy
            )
        );
    }
}

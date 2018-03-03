<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay\Validation;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Validation\ApiVersionConstraint
 */
class ApiVersionConstraintTest extends TestCase
{
    public function testMessage()
    {
        $expectedMessage = 'The api version {{ api_version }} is invalid';
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
                'Expected %s to be a validator of ApiVersionConstraint, but was %s',
                ApiVersionValidator::class,
                $validateBy
            )
        );
    }
}

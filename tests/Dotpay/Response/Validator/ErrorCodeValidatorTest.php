<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\ErrorCodeConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Response\Validator\ChannelValidator
 */
class ErrorCodeValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new ErrorCodeConstraint();
        $this->validator->validate($value, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidValue()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidValues(): array
    {
        return [
            ['PAYMENT_EXPIRED'],
            ['UNKNOWN_CHANNEL'],
            ['DISABLED_CHANNEL'],
            ['UNKNOWN_CURRENCY'],
            ['BLOCKED_ACCOUNT'],
            ['INACTIVE_SELLER'],
            ['AMOUNT_TOO_LOW'],
            ['AMOUNT_TOO_HIGH'],
            ['BAD_DATA_FORMAT'],
            ['REQUIRED_PARAMETERS_NOT_PRESENT'],
            ['MULTIMERCHANT_INVALID_ACCOUNT_CONFIGURATION']
            ['MULTIMERCHANT_INSUFFICIENT_AMOUNT'],
            ['MULTIMERCHANT_WRONG_CURRENCY'],
            ['UNKNOWN_ERROR'],
        ];
    }

    protected function createValidator()
    {
        return new ErrorCodeValidator();
    }
}

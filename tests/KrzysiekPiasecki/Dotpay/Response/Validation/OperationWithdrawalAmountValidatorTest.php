<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validation;

use KrzysiekPiasecki\Dotpay\Response\Validation\Constraint\OperationWithdrawalAmountConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Response\Validation\OperationWithdrawalAmountValidator
 */
class OperationWithdrawalAmountValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new OperationWithdrawalAmountConstraint();
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
            ['1'],
            ['1999343.23'],
            ['12.34'],
            ['0.34'],
        ];
    }

    protected function createValidator()
    {
        return new OperationWithdrawalAmountValidator();
    }
}

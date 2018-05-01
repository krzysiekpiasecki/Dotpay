<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\OperationCommissionAmountConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Response\Validator\OperationCommissionAmountValidator
 */
class OperationCommissionAmountValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new OperationCommissionAmountConstraint();
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
            ['-1'],
            ['-1999343.23'],
            ['-12.34'],
            ['-0.34'],
        ];
    }

    protected function createValidator()
    {
        return new OperationCommissionAmountValidator();
    }
}

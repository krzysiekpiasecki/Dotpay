<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\OperationTypeConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Response\Validator\OperationTypeValidator
 */
class OperationTypeValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new OperationTypeConstraint();
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
            ['payment'],
            ['payment_multimerchant_child'],
            ['payment_multimerchant_parent'],
            ['refund'],
            ['payout'],
            ['payout_any_amount'],
            ['release_rollback'],
            ['unidentified_payment'],
            ['complaint'],
            ['credit_card_registration'],
        ];
    }

    protected function createValidator()
    {
        return new OperationTypeValidator();
    }
}

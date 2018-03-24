<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\ChLockConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Request\Validation\ChLockValidator
 */
class ChLockValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new ChLockConstraint();
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
            ['0'],
            ['1'],
        ];
    }

    protected function createValidator()
    {
        return new ChLockValidator();
    }
}

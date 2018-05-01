<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\FirstnameConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\FirstnameValidator
 */
class FirstnameValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValues(string $firstname)
    {
        $constraint = new FirstnameConstraint();
        $this->validator->validate($firstname, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidValues()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidValues(): array
    {
        return [
            ['Krzysiek'],
            ['Robert'],
            ['ABCD '],
        ];
    }

    protected function createValidator()
    {
        return new FirstnameValidator();
    }
}

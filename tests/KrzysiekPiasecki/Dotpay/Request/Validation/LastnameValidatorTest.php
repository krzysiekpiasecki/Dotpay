<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\LastnameConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Request\Validation\LastnameValidator
 */
class LastnameValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidLastnameuage(string $lastname)
    {
        $constraint = new LastnameConstraint();
        $this->validator->validate($lastname, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidLastnameuage()
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
        return new LastnameValidator();
    }
}

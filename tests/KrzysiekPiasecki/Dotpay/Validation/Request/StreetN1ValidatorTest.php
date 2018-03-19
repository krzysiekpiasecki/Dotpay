<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\StreetN1Constraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Validation\Request\StreetN1Validator
 */
class StreetN1ValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues()
     */
    public function testValidStreetN1(string $value)
    {
        $constraint = new StreetN1Constraint();
        $this->validator->validate($value, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidStreetN1()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidValues(): array
    {
        return [
            ['Strzegomska 42b'],
        ];
    }

    protected function createValidator()
    {
        return new StreetN1Validator();
    }
}

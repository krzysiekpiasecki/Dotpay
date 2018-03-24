<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\CurrencyConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Request\Validation\CurrencyValidator
 */
class CurrencyValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new CurrencyConstraint();
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
            ['PLN'],
            ['EUR'],
            ['USD'],
            ['GBP'],
            ['JPY'],
            ['CZK'],
            ['SEK'],
            ['UAH'],
            ['RON'],
        ];
    }

    protected function createValidator()
    {
        return new CurrencyValidator();
    }
}

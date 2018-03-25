<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\OperationCurrencyConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Response\Validator\OperationCurrencyValidator
 */
class OperationCurrencyValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new OperationCurrencyConstraint();
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
        return new OperationCurrencyValidator();
    }
}

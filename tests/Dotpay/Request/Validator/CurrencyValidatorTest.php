<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\CurrencyConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\CurrencyValidator
 */
class CurrencyValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     *
     * @param string $value Valid currency
     */
    public function testValidValue(string $value)
    {
        $constraint = new CurrencyConstraint();
        $this->validator->validate($value, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     * @dataProvider provideInvalidValues
     *
     * @param string $value     Invalid currency
     * @param string $errorCode Error code when invalid currency
     */
    public function testInvalidValue(string $value, string $errorCode)
    {
        $this->validator->validate($value, new CurrencyConstraint());
        $this->buildViolation('The value {{ value }} is not a valid \'currency\' parameter')
            ->setParameter('{{ value }}', "\"${value}\"")
            ->setCode($errorCode)
            ->assertRaised();
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

    /**
     * @return array
     */
    public function provideInvalidValues(): array
    {
        return [
            ['pln', '8e179f1b-97aa-4560-a02f-2a8b42e49df7'],
            ['EUr', '8e179f1b-97aa-4560-a02f-2a8b42e49df7'],
            ['CHK', '8e179f1b-97aa-4560-a02f-2a8b42e49df7'],
        ];
    }

    /**
     * @return CurrencyValidator
     */
    protected function createValidator()
    {
        return new CurrencyValidator();
    }
}

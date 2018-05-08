<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\AmountConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\AmountValidator
 */
class AmountValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidData
     *
     * @param string Valid amount
     */
    public function testValidAmount(string $value)
    {
        $constraint = new AmountConstraint();
        $this->validator->validate($value, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate
     * @dataProvider provideInvalidData
     *
     * @param string Invalid amount
     */
    public function testInvalidAmount(string $value)
    {
        $this->validator->validate($value, new AmountConstraint());
        $this->buildViolation('The value {{ value }} is not a valid \'amount\' parameter')
            ->setParameter('{{ value }}', $value)
            ->assertRaised();
    }

    /**
     * @return array
     */
    public function provideValidData(): array
    {
        return [
            ['1.2'],
            ['1999343.23'],
            ['12.34'],
            ['0.34'],
            ['1234567891'],
        ];
    }

    /**
     * @return array
     */
    public function provideInvalidData(): array
    {
        return [
            ['a9999990'],
            ['999,99'],
            ['+23'],
            ['-23'],
            ['+.23'],
            ['-.23'],
            ['.23'],
            ['-12'],
            ['0'],
            [''],
            ['12345678910'],
        ];
    }

    protected function createValidator()
    {
        return new AmountValidator();
    }
}

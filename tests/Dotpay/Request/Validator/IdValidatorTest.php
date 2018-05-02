<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\IdConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\IdValidator
 */
class IdValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidData()
     * @param string $value Valid Id
     */
    public function testValidId(string $value)
    {
        $constraint = new IdConstraint();
        $this->validator->validate($value, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate
     * @dataProvider provideInvalidData
     * @param string $value Invalid Id
     */
    public function testInvalidId(string $value)
    {
        $this->validator->validate($value, new IdConstraint());
        $this->buildViolation('The value {{ value }} is not a valid \'id\' parameter')
            ->setParameter('{{ value }}', $value)
            ->assertRaised();
    }

    /**
     * @return array
     */
    public function provideValidData(): array
    {
        return [
           ['1'],
           ['123456'],
           ['999999'],
        ];
    }

    /**
     * @return array
     */
    public function provideInvalidData(): array
    {
        return [
            ['9999990'],
            ['-1'],
            ['0'],
            ['999999.0'],
            ['0123'],
            ['a0123']
        ];
    }

    protected function createValidator()
    {
        return new IdValidator();
    }
}

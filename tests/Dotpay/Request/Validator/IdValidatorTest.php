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
     */
    public function testValidId(string $id)
    {
        $constraint = new IdConstraint();
        $this->validator->validate($id, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate
     * @dataProvider provideInvalidData
     *
     * @param string Invalid Id
     * @param int $errorCode Validation error code
     */
    public function testInvalidId(string $id, int $errorCode)
    {
        $this->validator->validate($id, new IdConstraint());
        $this->buildViolation('The value {{ value }} is not a valid \'id\' parameter')
            ->setParameter('{{ value }}', $id)
            ->setCode($errorCode)
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
            ['9999990', IdValidator::INVALID_RANGE],
            ['-1', IdValidator::INVALID_RANGE],
            ['999999.0', IdValidator::INVALID_FORMAT],
            ['0123', IdValidator::INVALID_FORMAT],
            ['a0123', IdValidator::INVALID_FORMAT]
        ];
    }

    protected function createValidator()
    {
        return new IdValidator();
    }
}

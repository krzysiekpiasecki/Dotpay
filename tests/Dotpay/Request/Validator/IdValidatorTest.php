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
     */
    public function testInvalidId(string $id)
    {
        $this->validator->validate($id, new IdConstraint());
        $this->buildViolation('The value {{ value }} is not a valid \'id\' parameter')
            ->setParameter('{{ value }}', sprintf('"%s"', $id))
            ->setCode('de1e3db3-5ed4-4941-aae4-59f3667cc3a3')
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
            ['999999.0'],
            ['0123']
        ];
    }

    protected function createValidator()
    {
        return new IdValidator();
    }
}

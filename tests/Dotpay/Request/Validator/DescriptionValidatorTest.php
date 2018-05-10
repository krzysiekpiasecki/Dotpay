<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\DescriptionConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\DescriptionValidator
 */
class DescriptionValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     */
    public function testValidValue()
    {
        $constraint = new DescriptionConstraint();
        $this->validator->validate('a', $constraint);
        $this->assertNoViolation();
        $this->validator->validate(str_repeat('a', 255), $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testToLongDescription()
    {
        $toLong = str_repeat('a', 256);
        $this->validator->validate($toLong, new DescriptionConstraint());
        $this->buildViolation('This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.')
            ->setParameters([
                '{{ value }}' => sprintf("\"%s\"", $toLong),
                '{{ limit }}' => 255
            ])
            ->setPlural(255)
            ->setInvalidValue($toLong)
            ->setCode('d94b19cc-114f-4f44-9cc4-4138e80a87b9')
            ->assertRaised();
    }

    protected function createValidator()
    {
        return new DescriptionValidator();
    }
}

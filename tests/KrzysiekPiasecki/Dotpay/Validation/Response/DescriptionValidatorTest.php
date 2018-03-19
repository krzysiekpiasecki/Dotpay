<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Response;

use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\DescriptionConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Validation\Response\DescriptionValidator
 */
class DescriptionValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidLanguages()
     */
    public function testValidDescription(string $Description)
    {
        $constraint = new DescriptionConstraint();
        $this->validator->validate($Description, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidDescription()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidLanguages(): array
    {
        return [
            ['qwertyuiiopasdfghjklzxcvbnm1234567890-'],
            ['123654789654123           1236554'],
        ];
    }

    protected function createValidator()
    {
        return new DescriptionValidator();
    }
}

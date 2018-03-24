<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validation;

use KrzysiekPiasecki\Dotpay\Response\Validation\Constraint\EmailConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Response\Validation\EmailValidator
 */
class EmailValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidLanguages()
     */
    public function testValidEmail(string $email)
    {
        $constraint = new EmailConstraint();
        $this->validator->validate($email, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidEmail()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidLanguages(): array
    {
        return [
            ['robert_bystrzanowski@op.pl'],
            ['jannowak@gmail.com'],
        ];
    }

    protected function createValidator()
    {
        return new EmailValidator();
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\PEmailConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Response\Validator\PEmailValidator
 */
class PEmailValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues()
     */
    public function testValidPEmail(string $PEmail)
    {
        $constraint = new PEmailConstraint();
        $this->validator->validate($PEmail, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidPEmail()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidValues(): array
    {
        return [
            ['robert_bystrzanowski@op.pl'],
            ['jannowak@gmail.com'],
        ];
    }

    protected function createValidator()
    {
        return new PEmailValidator();
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\OperationDatetimeConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Response\Validator\OperationDatetimeValidator
 */
class OperationDatetimeValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidDates()
     */
    public function testValidDate(string $date)
    {
        $constraint = new OperationDatetimeConstraint();
        $this->validator->validate($date, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidDate()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidDates(): array
    {
        return [
            ['2010-03-02 03:32:11'],
            ['1994-04-11 23:33:09'],
        ];
    }

    protected function createValidator()
    {
        return new OperationDatetimeValidator();
    }
}

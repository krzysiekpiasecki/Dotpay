<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\LangConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\LangValidator
 */
class LangValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidLanguages
     */
    public function testValidLanguage(string $lang)
    {
        $constraint = new LangConstraint();
        $this->validator->validate($lang, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidLanguage()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidLanguages(): array
    {
        return [
            ['cz'],
            ['de'],
            ['en'],
            ['es'],
            ['fr'],
            ['hu'],
            ['it'],
            ['pl'],
            ['ro'],
            ['ru'],
        ];
    }

    protected function createValidator()
    {
        return new LangValidator();
    }
}

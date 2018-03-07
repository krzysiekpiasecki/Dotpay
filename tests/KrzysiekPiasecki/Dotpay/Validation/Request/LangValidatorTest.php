<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ApiVersionConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\LangConstraint;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \KrzysiekPiasecki\Dotpay\Validation\Request\LangValidator
 */
class LangValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new LangValidator();
    }

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
    public function provideValidLanguages(): array {
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
            ['ru']
        ];
    }

}

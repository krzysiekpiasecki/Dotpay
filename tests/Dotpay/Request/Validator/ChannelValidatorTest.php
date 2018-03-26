<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\ChannelConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\ChannelValidator
 */
class ChannelValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @covers ::validate()
     * @dataProvider provideValidValues
     */
    public function testValidValue(string $value)
    {
        $constraint = new ChannelConstraint();
        $this->validator->validate($value, $constraint);
        $this->assertNoViolation();
    }

    /**
     * @covers ::validate()
     */
    public function testInvalidValue()
    {
        $this->markTestSkipped('Not implemented yet');
    }

    /**
     * @return array
     */
    public function provideValidValues(): array
    {
        return [
            ['71'],
            ['246'],
            ['248'],
            ['249'],
            ['249'],
            ['1'],
            ['2'],
            ['4'],
            ['6'],
            ['36'],
            ['38'],
            ['38'],
            ['44'],
            ['45'],
            ['46'],
            ['48'],
            ['50'],
            ['51'],
            ['56'],
            ['58'],
            ['60'],
            ['65'],
            ['66'],
            ['70'],
            ['72'],
            ['73'],
            ['74'],
            ['75'],
            ['76'],
            ['80'],
            ['81'],
            ['83'],
            ['84'],
            ['86'],
            ['87'],
            ['90'],
            ['91'],
            ['92'],
            ['7'],
            ['10'],
            ['15'],
            ['16'],
            ['32'],
            ['33'],
            ['88'],
            ['89'],
            ['11'],
            ['21'],
            ['31'],
            ['35'],
            ['82'],
            ['24'],
            ['52'],
            ['218'],
            ['55'],
            ['68'],
            ['212'],
        ];
    }

    protected function createValidator()
    {
        return new ChannelValidator();
    }
}

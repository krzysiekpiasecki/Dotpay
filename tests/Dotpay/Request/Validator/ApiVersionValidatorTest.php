<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\ApiVersionConstraint;
use Symfony\Component\Validator\Test\ConstraintValidatorTestCase;

/**
 * @coversDefaultClass \Dotpay\Request\Validator\ApiVersionValidator
 */
class ApiVersionValidatorTest extends ConstraintValidatorTestCase
{
    /**
     * @param string $value Valid API version
     * @covers ::validate
     * @dataProvider provideValidData
     */
    public function testValidApiVersion(string $value)
    {
        $this->validator->validate($value, new ApiVersionConstraint());

        $this->assertNoViolation();
    }

    /**
     * @param string $value Invalid API version
     * @covers ::validate
     * @dataProvider provideInvalidData
     */
    public function testInvalidApiVersion(string $value)
    {
        $this->validator->validate($value, new ApiVersionConstraint());

        $this->buildViolation('The value {{ value }} is not a valid \'api_version\' parameter')
            ->setParameter('{{ value }}', $value)
            ->assertRaised();
    }

    /**
     * @see testValidate()
     *
     * @return array
     */
    public function provideValidData(): array
    {
        return [
            ['dev'],
        ];
    }

    /**
     * @see testValidate()
     *
     * @return array
     */
    public function provideInvalidData(): array
    {
        return [
            [' dev'],
            ['prod'],
            ['DEV'],
        ];
    }

    /**
     * {@inheritdoc}
     *
     * @return ApiVersionValidator
     */
    protected function createValidator()
    {
        return new ApiVersionValidator();
    }
}

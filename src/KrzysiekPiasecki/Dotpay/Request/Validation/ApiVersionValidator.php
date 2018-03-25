<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\ApiVersionConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against ApiVersionConstraint.
 *
 * @see ApiVersionConstraint Constraint against 'api_version' parameter
 */
class ApiVersionValidator extends ConstraintValidator
{
    /**
     * Validate against {@see ApiVersionConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if ('dev' !== $value) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ api_version }}', $value)
                ->addViolation();
        }
    }
}

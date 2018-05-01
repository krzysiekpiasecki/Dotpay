<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\ApiVersionConstraint;
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
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}

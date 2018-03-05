<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\FirstnameConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against FirstnameConstraint.
 *
 * @see FirstnameConstraint Constraint against 'firstname' parameter
 */
class FirstnameValidator extends ConstraintValidator
{
    /**
     * Validate against {@see FirstnameConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        $this->context->buildViolation($constraint->message)
            ->addViolation();
    }
}

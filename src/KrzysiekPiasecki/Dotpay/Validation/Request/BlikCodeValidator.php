<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\BlikCodeConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against BlikCodeConstraint.
 *
 * @see BlikCodeConstraint Constraint against 'blikCode' parameter
 */
class BlikCodeValidator extends ConstraintValidator
{
    /**
     * Validate against {@see BlikCodeConstraint}.
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

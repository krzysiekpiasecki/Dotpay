<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\URLCConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against URLCConstraint.
 *
 * @see URLCConstraint Constraint against 'URLC' parameter
 */
class URLCValidator extends ConstraintValidator
{
    /**
     * Validate against {@see URLCConstraint}.
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

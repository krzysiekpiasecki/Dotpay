<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validation;

use KrzysiekPiasecki\Dotpay\Response\Validation\Constraint\CreditCardBrandCodeConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against CreditCardBrandCodeConstraint.
 *
 * @see CreditCardBrandCodeConstraint Constraint against 'creditCardBrandCode' parameter
 */
class CreditCardBrandCodeValidator extends ConstraintValidator
{
    /**
     * Validate against {@see CreditCardBrandCodeConstraint}.
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

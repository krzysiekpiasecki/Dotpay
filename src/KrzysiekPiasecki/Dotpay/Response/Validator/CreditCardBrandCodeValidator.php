<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validator;

use KrzysiekPiasecki\Dotpay\Response\Validator\Constraint\CreditCardBrandCodeConstraint;
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

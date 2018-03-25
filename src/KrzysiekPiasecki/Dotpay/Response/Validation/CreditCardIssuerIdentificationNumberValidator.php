<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validation;

use KrzysiekPiasecki\Dotpay\Response\Validation\Constraint\CreditCardIssuerIdentificationNumberConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against CreditCardIssuerIdentificationNumberConstraint.
 *
 * @see CreditCardIssuerIdentificationNumberConstraint Constraint against 'creditCardIssuerIdentificationNumber' parameter
 */
class CreditCardIssuerIdentificationNumberValidator extends ConstraintValidator
{
    /**
     * Validate against {@see CreditCardIssuerIdentificationNumberConstraint}.
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

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ExpirationDateConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\DateTimeValidator;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against ExpirationDateConstraint.
 *
 * @see ExpirationDateConstraint Constraint against 'expirationDate' parameter
 */
class ExpirationDateValidator extends DateTimeValidator
{
    /**
     * Validate against {@see ExpirationDateConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

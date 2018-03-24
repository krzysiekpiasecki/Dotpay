<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\ChLockConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;

/**
 * Validator against ChLockConstraint.
 *
 * @see ChLockConstraint Constraint against 'chLock' parameter
 */
class ChLockValidator extends ChoiceValidator
{
    /**
     * Validate against {@see ChLockConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\IdConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RangeValidator;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against IdConstraint.
 *
 * @see IdConstraint Constraint against 'id' parameter
 */
class IdValidator extends RangeValidator
{
    /**
     * Validate against {@see IdConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

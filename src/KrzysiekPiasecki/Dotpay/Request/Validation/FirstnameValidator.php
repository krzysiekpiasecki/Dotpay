<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\FirstnameConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;

/**
 * Validator against FirstnameConstraint.
 *
 * @see FirstnameConstraint Constraint against 'firstname' parameter
 */
class FirstnameValidator extends RegexValidator
{
    /**
     * Validate against {@see FirstnameConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

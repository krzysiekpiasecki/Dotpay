<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\StreetN1Constraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against StreetN1Constraint.
 *
 * @see StreetN1Constraint Constraint against 'streetN1' parameter
 */
class StreetN1Validator extends RegexValidator
{
    /**
     * Validate against {@see StreetN1Constraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

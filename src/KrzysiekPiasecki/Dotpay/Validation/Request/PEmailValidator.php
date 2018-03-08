<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\PEmailConstraint;
use Symfony\Component\Validator\Constraint;

/**
 * Validator against PEmailConstraint.
 *
 * @see PEmailConstraint Constraint against 'pEmail' parameter
 */
class PEmailValidator extends \Symfony\Component\Validator\Constraints\EmailValidator
{
    /**
     * Validate against {@see PEmailConstraint}.
     *
     * @param mixed $value Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

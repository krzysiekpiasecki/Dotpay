<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request;

use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\IgnoreLastPaymentChannelConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against IgnoreLastPaymentChannelConstraint.
 *
 * @see IgnoreLastPaymentChannelConstraint Constraint against 'ignoreLastPaymentChannel' parameter
 */
class IgnoreLastPaymentChannelValidator extends ChoiceValidator
{
    /**
     * Validate against {@see IgnoreLastPaymentChannelConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

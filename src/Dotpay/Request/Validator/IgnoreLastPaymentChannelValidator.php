<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\IgnoreLastPaymentChannelConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;

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
        parent::validate($value, $constraint);
    }
}

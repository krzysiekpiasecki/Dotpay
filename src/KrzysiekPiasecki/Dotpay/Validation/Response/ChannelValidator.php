<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Response;

use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\ChannelConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;

/**
 * Validator against ChannelConstraint.
 *
 * @see ChannelConstraint Constraint against 'channel' parameter
 */
class ChannelValidator extends ChoiceValidator
{
    /**
     * Validate against {@see ChannelConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\CreditCardMaskedNumberConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against CreditCardMaskedNumberConstraint.
 *
 * @see CreditCardMaskedNumberConstraint Constraint against 'creditCardMaskedNumber' parameter
 */
class CreditCardMaskedNumberValidator extends ConstraintValidator
{
    /**
     * Validate against {@see CreditCardMaskedNumberConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
    }
}

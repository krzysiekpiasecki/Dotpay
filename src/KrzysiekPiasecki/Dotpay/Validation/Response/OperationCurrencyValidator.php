<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Response;

use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationCurrencyConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;

/**
 * Validator against OperationCurrencyConstraint.
 *
 * @see OperationCurrencyConstraint Constraint against 'operationCurrency' parameter
 */
class OperationCurrencyValidator extends ChoiceValidator
{
    /**
     * Validate against {@see OperationCurrencyConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

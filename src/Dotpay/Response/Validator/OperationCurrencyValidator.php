<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\OperationCurrencyConstraint;
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
        parent::validate($value, $constraint);
    }
}

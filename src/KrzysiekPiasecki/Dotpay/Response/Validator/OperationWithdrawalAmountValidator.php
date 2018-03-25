<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validator;

use KrzysiekPiasecki\Dotpay\Response\Validator\Constraint\OperationWithdrawalAmountConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;

/**
 * Validator against OperationWithdrawalAmountConstraint.
 *
 * @see OperationWithdrawalAmountConstraint Constraint against 'operationWithdrawalAmount' parameter
 */
class OperationWithdrawalAmountValidator extends RegexValidator
{
    /**
     * Validate against {@see OperationWithdrawalAmountConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

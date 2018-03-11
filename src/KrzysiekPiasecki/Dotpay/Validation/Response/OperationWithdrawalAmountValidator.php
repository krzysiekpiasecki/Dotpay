<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Response;

use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationWithdrawalAmountConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;
use Symfony\Component\Validator\ConstraintValidator;

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

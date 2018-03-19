<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Response;

use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationDatetimeConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\DateTimeValidator;

/**
 * Validator against OperationDatetimeConstraint.
 *
 * @see OperationDatetimeConstraint Constraint against 'operationDatetime' parameter
 */
class OperationDatetimeValidator extends DateTimeValidator
{
    /**
     * Validate against {@see OperationDatetimeConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

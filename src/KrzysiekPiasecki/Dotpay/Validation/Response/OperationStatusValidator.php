<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Response;

use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationStatusConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against OperationStatusConstraint.
 *
 * @see OperationStatusConstraint Constraint against 'operationStatus' parameter
 */
class OperationStatusValidator extends ChoiceValidator
{
    /**
     * Validate against {@see OperationStatusConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

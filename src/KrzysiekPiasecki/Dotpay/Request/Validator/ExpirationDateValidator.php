<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validator;

use KrzysiekPiasecki\Dotpay\Request\Validator\Constraint\ExpirationDateConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\DateTimeValidator;

/**
 * Validator against ExpirationDateConstraint.
 *
 * @see ExpirationDateConstraint Constraint against 'expirationDate' parameter
 */
class ExpirationDateValidator extends DateTimeValidator
{
    /**
     * Validate against {@see ExpirationDateConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

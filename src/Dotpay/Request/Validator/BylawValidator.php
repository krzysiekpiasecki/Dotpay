<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\BylawConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\ChoiceValidator;

/**
 * Validator against BylawConstraint.
 *
 * @see BylawConstraint Constraint against 'bylaw' parameter
 */
class BylawValidator extends ChoiceValidator
{
    /**
     * Validate against {@see BylawConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

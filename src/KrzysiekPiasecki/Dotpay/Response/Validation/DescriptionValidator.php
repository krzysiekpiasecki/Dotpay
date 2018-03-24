<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validation;

use KrzysiekPiasecki\Dotpay\Response\Validation\Constraint\DescriptionConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;

/**
 * Validator against DescriptionConstraint.
 *
 * @see DescriptionConstraint Constraint against 'description' parameter
 */
class DescriptionValidator extends RegexValidator
{
    /**
     * Validate against {@see DescriptionConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        return parent::validate($value, $constraint);
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\CityConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;

/**
 * Validator against CityConstraint.
 *
 * @see CityConstraint Constraint against 'city' parameter
 */
class CityValidator extends RegexValidator
{
    /**
     * Validate against {@see CityConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

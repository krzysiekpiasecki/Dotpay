<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\PInfoConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against PInfoConstraint.
 *
 * @see PInfoConstraint Constraint against 'pInfo' parameter
 */
class PInfoValidator extends ConstraintValidator
{
    /**
     * Validate against {@see PInfoConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
    }
}

<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\EmailConstraint;
use Symfony\Component\Validator\Constraint;

/**
 * Validator against EmailConstraint.
 *
 * @see EmailConstraint Constraint against 'email' parameter
 */
class EmailValidator extends \Symfony\Component\Validator\Constraints\EmailValidator
{
    /**
     * Validate against {@see EmailConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

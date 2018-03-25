<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\URLCConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\UrlValidator;

/**
 * Validator against URLCConstraint.
 *
 * @see URLCConstraint Constraint against 'URLC' parameter
 */
class URLCValidator extends UrlValidator
{
    /**
     * Validate against {@see URLCConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

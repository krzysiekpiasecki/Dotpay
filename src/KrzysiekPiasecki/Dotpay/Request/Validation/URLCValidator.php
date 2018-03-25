<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validation;

use KrzysiekPiasecki\Dotpay\Request\Validation\Constraint\URLCConstraint;
use Symfony\Component\Validator\Constraint;

/**
 * Validator against URLCConstraint.
 *
 * @see URLCConstraint Constraint against 'URLC' parameter
 */
class URLCValidator extends \Symfony\Component\Validator\Constraints\UrlValidator
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

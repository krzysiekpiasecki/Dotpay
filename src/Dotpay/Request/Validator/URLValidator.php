<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\URLConstraint;
use Symfony\Component\Validator\Constraint;

/**
 * Validator against URLConstraint.
 *
 * @see URLConstraint Constraint against 'URL' parameter
 */
class URLValidator extends \Symfony\Component\Validator\Constraints\UrlValidator
{
    /**
     * Validate against {@see URLConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

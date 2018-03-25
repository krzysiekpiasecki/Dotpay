<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Response\Validator;

use Dotpay\Response\Validator\Constraint\GeoipCountryConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against GeoipCountryConstraint.
 *
 * @see GeoipCountryConstraint Constraint against 'geoipCountry' parameter
 */
class GeoipCountryValidator extends ConstraintValidator
{
    /**
     * Validate against {@see GeoipCountryConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        $this->context->buildViolation($constraint->message)
            ->addViolation();
    }
}

<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request\Validator;

use KrzysiekPiasecki\Dotpay\Request\Validator\Constraint\ButtontextConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\RegexValidator;

/**
 * Validator against ButtontextConstraint.
 *
 * @see ButtontextConstraint Constraint against 'buttontext' parameter
 */
class ButtontextValidator extends RegexValidator
{
    /**
     * Validate against {@see ButtontextConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

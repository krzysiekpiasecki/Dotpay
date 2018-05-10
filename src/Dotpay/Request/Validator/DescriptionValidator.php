<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\DescriptionConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\LengthValidator;

/**
 * Validator against DescriptionConstraint.
 *
 * @see DescriptionConstraint Constraint against 'description' parameter
 */
class DescriptionValidator extends LengthValidator
{
    /**
     * Validate against {@see DescriptionConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     * @throws \UnexpectedTypeException Constraint is not a class {@see Symfony\Component\Validator\Constraints\Length}
     */
    public function validate($value, Constraint $constraint)
    {
        parent::validate($value, $constraint);
    }
}

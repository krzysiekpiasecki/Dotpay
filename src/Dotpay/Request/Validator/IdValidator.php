<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\IdConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against IdConstraint.
 *
 * @see IdConstraint Constraint against 'id' parameter
 */
class IdValidator extends ConstraintValidator
{
    /** @var int When invalid id format */
    const INVALID_FORMAT = 1;

    /** @var int When invalid id range */
    const INVALID_RANGE = 2;

    /**
     * Validate against {@see IdConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if (false === filter_var($value, FILTER_VALIDATE_INT)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->setCode(self::INVALID_FORMAT)
                ->addViolation();
            return;
        }

        $intValue = intval($value);
        if ($intValue < 1 || $intValue > 999999) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->setCode(self::INVALID_RANGE)
                ->addViolation();
        }
    }
}

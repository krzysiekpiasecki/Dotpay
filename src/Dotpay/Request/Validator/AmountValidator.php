<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator;

use Dotpay\Request\Validator\Constraint\AmountConstraint;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Validation;

/**
 * Validator against AmountConstraint.
 *
 * @see AmountConstraint Constraint against 'amount' parameter
 */
class AmountValidator extends ConstraintValidator
{
    /**
     * Validate against {@see AmountConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if (false === filter_var($value, FILTER_VALIDATE_FLOAT)) {
            return $this->addViolation($constraint->message, $value);
        }

        $validator = Validation::createValidator();
        $violations = $validator->validate($value, new Length(['min' => 1, 'max' => 10]));
        if (0 !== count($violations)) {
            return $this->addViolation($constraint->message, $value);
        }

        $lead = substr($value, 0, 1);
        if ($lead === "." || !ctype_digit($lead)) {
            return $this->addViolation($constraint->message, $value);
        }

        if (floatval($value) <= 0) {
            return $this->addViolation($constraint->message, $value);
        }

    }

    private function addViolation(string $message, string $value) {
        $this->context->buildViolation($message)
            ->setParameter('{{ value }}', $value)
            ->addViolation();

    }
}

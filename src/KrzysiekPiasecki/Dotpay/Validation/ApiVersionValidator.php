<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace  KrzysiekPiasecki\Dotpay\Validation;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validator against {@see ApiVersionConstraint}.
 */
class ApiVersionValidator extends ConstraintValidator
{
    /**
     * Validate against {@see ApiVersionConstraint}.
     *
     * @param mixed      $value      Validated value
     * @param Constraint $constraint Used constraint
     */
    public function validate($value, Constraint $constraint)
    {
        if ('' !== $value) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ api_version }}', $value)
                ->addViolation();
        }
    }
}

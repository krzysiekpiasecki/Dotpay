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

/**
 * @Annotation
 */
class ApiVersionConstraint extends Constraint
{
    public $message = 'The api version {{ api_version }} is invalid';

    public function validatedBy()
    {
        return ApiVersionValidator::class;
    }
}

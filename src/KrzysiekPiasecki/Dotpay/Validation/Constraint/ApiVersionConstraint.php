<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\ApiVersionValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against request parameter 'api_version'.
 *
 * @see RequestBag::$api_version The request parameter 'api_version'
 * @Annotation
 */
class ApiVersion extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The request api_version parameter {{ api_version }} is invalid';

    /**
     * @inheritdoc
     */
    public function validatedBy()
    {
        return ApiVersionValidator::class;
    }
}

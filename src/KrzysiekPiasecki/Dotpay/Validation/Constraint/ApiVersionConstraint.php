<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\ApiVersionValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'api_version' parameter.
 *
 * @see RequestBag::$api_version Parameter 'api_version'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ApiVersionConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ api_version }} is not a valid \'api_version\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ApiVersionValidator::class;
    }
}

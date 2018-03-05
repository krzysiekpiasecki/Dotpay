<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\LastnameValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'lastname' parameter.
 *
 * @see RequestBag::$lastname Parameter 'lastname'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class LastnameConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ lastname }} is not a valid \'lastname\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return LastnameValidator::class;
    }
}

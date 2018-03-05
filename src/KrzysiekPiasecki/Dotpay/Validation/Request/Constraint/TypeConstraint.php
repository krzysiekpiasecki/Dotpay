<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\TypeValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'type' parameter.
 *
 * @see RequestBag::$type Parameter 'type'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class TypeConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ type }} is not a valid \'type\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return TypeValidator::class;
    }
}

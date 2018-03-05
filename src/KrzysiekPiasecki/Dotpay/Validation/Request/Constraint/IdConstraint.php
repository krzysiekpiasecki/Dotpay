<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\IdValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'id' parameter.
 *
 * @see RequestBag::$id Parameter 'id'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IdConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ id }} is not a valid \'id\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IdValidator::class;
    }
}

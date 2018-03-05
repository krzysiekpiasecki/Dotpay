<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\ControlValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'control' parameter.
 *
 * @see RequestBag::$control Parameter 'control'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ControlConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ control }} is not a valid \'control\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ControlValidator::class;
    }
}

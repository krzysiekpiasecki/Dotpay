<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\FirstnameValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'firstname' parameter.
 *
 * @see RequestBag::$firstname Parameter 'firstname'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class FirstnameConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ firstname }} is not a valid \'firstname\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return FirstnameValidator::class;
    }
}

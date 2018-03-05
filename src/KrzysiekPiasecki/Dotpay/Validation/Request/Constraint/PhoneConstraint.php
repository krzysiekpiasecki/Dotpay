<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\PhoneValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'phone' parameter.
 *
 * @see RequestBag::$phone Parameter 'phone'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PhoneConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ phone }} is not a valid \'phone\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return PhoneValidator::class;
    }
}

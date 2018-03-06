<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\CurrencyValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'currency' parameter.
 *
 * @see RequestBag::$currency Parameter 'currency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CurrencyConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ currency }} is not a valid \'currency\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CurrencyValidator::class;
    }
}

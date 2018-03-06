<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\IgnoreLastPaymentChannelValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'ignoreLastPaymentChannel' parameter.
 *
 * @see RequestBag::$ignoreLastPaymentChannel Parameter 'ignoreLastPaymentChannel'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IgnoreLastPaymentChannelConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ ignoreLastPaymentChannel }} 
        is not a valid \'ignoreLastPaymentChannel\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IgnoreLastPaymentChannelValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\SignatureValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'signature' parameter.
 *
 * @see ResponseBag::$signature Parameter 'signature'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class SignatureConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ signature }} is not a valid \'signature\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return SignatureValidator::class;
    }
}

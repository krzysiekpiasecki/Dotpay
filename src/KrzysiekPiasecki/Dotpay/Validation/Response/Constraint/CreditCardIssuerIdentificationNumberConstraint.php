<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\CreditCardIssuerIdentificationNumberValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardIssuerIdentificationNumber' parameter.
 *
 * @see ResponseBag::$creditCardIssuerIdentificationNumber Parameter 'creditCardIssuerIdentificationNumber'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CreditCardIssuerIdentificationNumberConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ creditCardIssuerIdentificationNumber }} is not a valid \'creditCardIssuerIdentificationNumber\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CreditCardIssuerIdentificationNumberValidator::class;
    }
}

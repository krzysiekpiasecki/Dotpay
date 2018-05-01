<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\CreditCardIssuerIdentificationNumberValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardIssuerIdentificationNumber' parameter.
 *
 * @see URLC::$creditCardIssuerIdentificationNumber Parameter 'creditCardIssuerIdentificationNumber'
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

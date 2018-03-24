<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\CreditCardBrandIdValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardBrandId' parameter.
 *
 * @see ResponseBag::$creditCardBrandId Parameter 'creditCardBrandId'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CreditCardIdConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ creditCardBrandId }} is not a valid \'creditCardBrandId\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CreditCardBrandIdValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\CreditCardMaskedNumberValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardMaskedNumber' parameter.
 *
 * @see ResponseBag::$creditCardMaskedNumber Parameter 'creditCardMaskedNumber'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CreditCardMaskedNumberConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ creditCardMaskedNumber }} is not a valid \'creditCardMaskedNumber\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CreditCardMaskedNumberValidator::class;
    }
}

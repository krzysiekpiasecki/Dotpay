<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\CreditCardBrandCodenameValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardBrandCodename' parameter.
 *
 * @see ResponseBag::$creditCardBrandCodename Parameter 'creditCardBrandCodename'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CreditCardBrandCodenameConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ creditCardBrandCodename }} is not a valid \'creditCardBrandCodename\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CreditCardBrandCodenameValidator::class;
    }
}

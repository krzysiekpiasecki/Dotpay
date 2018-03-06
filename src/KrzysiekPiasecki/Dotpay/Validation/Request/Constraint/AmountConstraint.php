<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\AmountValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'amount' parameter.
 *
 * @see RequestBag::$amount Parameter 'amount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class AmountConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ amount }} is not a valid \'amount\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return AmountValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationCurrencyValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationCurrency' parameter.
 *
 * @see ResponseBag::$operationCurrency Parameter 'operationCurrency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationCurrencyConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationCurrency }} is not a valid \'operationCurrency\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationCurrencyValidator::class;
    }
}

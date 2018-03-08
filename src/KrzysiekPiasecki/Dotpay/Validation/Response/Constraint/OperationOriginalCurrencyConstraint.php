<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationOriginalCurrencyValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationOriginalCurrency' parameter.
 *
 * @see ResponseBag::$operationOriginalCurrency Parameter 'operationOriginalCurrency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationOriginalCurrencyConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationOriginalCurrency }} is not a valid \'operationOriginalCurrency\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationOriginalCurrencyValidator::class;
    }
}

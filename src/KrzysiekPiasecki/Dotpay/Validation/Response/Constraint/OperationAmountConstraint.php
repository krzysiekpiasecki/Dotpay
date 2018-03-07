<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationAmountValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationAmount' parameter.
 *
 * @see ResponseBag::$operationAmount Parameter 'operationAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationAmountConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationAmount }} is not a valid \'operationAmount\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationAmountValidator::class;
    }
}

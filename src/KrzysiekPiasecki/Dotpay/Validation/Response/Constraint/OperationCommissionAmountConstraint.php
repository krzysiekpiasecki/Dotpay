<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationCommissionAmountValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationCommissionAmount' parameter.
 *
 * @see ResponseBag::$operationCommissionAmount Parameter 'operationCommissionAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationCommissionAmountConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationCommissionAmount }} is not a valid \'operationCommissionAmount\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationCommissionAmountValidator::class;
    }
}

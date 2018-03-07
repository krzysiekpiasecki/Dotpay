<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationOriginalAmountValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationOriginalAmount' parameter.
 *
 * @see ResponseBag::$operationOriginalAmount Parameter 'operationOriginalAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationOriginalAmountConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationOriginalAmount }} is not a valid \'operationOriginalAmount\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationOriginalAmountValidator::class;
    }
}

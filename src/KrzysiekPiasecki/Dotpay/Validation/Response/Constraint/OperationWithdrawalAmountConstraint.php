<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationWithdrawalAmountValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationWithdrawalAmount' parameter.
 *
 * @see ResponseBag::$operationWithdrawalAmount Parameter 'operationWithdrawalAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationWithdrawalAmountConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationWithdrawalAmount }} is not a valid \'operationWithdrawalAmount\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationWithdrawalAmountValidator::class;
    }
}

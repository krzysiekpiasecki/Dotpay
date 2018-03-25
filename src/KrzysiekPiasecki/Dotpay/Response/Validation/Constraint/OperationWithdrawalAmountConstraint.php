<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\OperationWithdrawalAmountValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'operationWithdrawalAmount' parameter.
 *
 * @see ResponseBag::$operationWithdrawalAmount Parameter 'operationWithdrawalAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationWithdrawalAmountConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationWithdrawalAmount }} is not a valid \'operationWithdrawalAmount\' parameter';

    public $pattern = '^(0|([1-9][0-9]*))(\\.[0-9]+)?$^';

    /**
     * OperationWithdrawalAmountConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationWithdrawalAmountValidator::class;
    }
}

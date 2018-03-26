<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\OperationCommissionAmountValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'operationCommissionAmount' parameter.
 *
 * @see ResponseBag::$operationCommissionAmount Parameter 'operationCommissionAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationCommissionAmountConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationCommissionAmount }} is not a valid \'operationCommissionAmount\' parameter';

    public $pattern = '^-(0|([1-9][0-9]*))(\\.[0-9]+)?$^';

    /**
     * OperationCommissionAmountConstraint constructor.
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
        return OperationCommissionAmountValidator::class;
    }
}

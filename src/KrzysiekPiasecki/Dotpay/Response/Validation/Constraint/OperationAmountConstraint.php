<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\OperationAmountValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'operationAmount' parameter.
 *
 * @see ResponseBag::$operationAmount Parameter 'operationAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationAmountConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationAmount }} is not a valid \'operationAmount\' parameter';

    public $pattern = '^(0|([1-9][0-9]*))(\\.[0-9]+)?$^';

    /**
     * OperationAmountConstraint constructor.
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
        return OperationAmountValidator::class;
    }
}

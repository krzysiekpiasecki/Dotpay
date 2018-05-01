<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\OperationOriginalAmountValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'operationOriginalAmount' parameter.
 *
 * @see URLC::$operationOriginalAmount Parameter 'operationOriginalAmount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationOriginalAmountConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationOriginalAmount }} is not a valid \'operationOriginalAmount\' parameter';

    public $pattern = '^(0|([1-9][0-9]*))(\\.[0-9]+)?$^';

    /**
     * OperationOriginalAmountConstraint constructor.
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
        return OperationOriginalAmountValidator::class;
    }
}

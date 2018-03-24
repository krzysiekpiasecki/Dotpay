<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\OperationDatetimeValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Constraint against 'operationDatetime' parameter.
 *
 * @see ResponseBag::$operationDatetime Parameter 'operationDatetime'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationDatetimeConstraint extends DateTime
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationDatetime }} is not a valid \'operationDatetime\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationDatetimeValidator::class;
    }
}

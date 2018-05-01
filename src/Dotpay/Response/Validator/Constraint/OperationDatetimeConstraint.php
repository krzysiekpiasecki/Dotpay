<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\OperationDatetimeValidator;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Constraint against 'operationDatetime' parameter.
 *
 * @see URLC::$operationDatetime Parameter 'operationDatetime'
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

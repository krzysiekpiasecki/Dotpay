<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationStatusValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationStatus' parameter.
 *
 * @see ResponseBag::$operationStatus Parameter 'operationStatus'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationStatusConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationStatus }} is not a valid \'operationStatus\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationStatusValidator::class;
    }
}

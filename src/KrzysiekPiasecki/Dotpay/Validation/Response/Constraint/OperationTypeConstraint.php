<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationTypeValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationType' parameter.
 *
 * @see ResponseBag::$operationType Parameter 'operationType'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationTypeConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationType }} is not a valid \'operationType\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationTypeValidator::class;
    }
}

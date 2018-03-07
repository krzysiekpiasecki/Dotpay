<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\OperationRelatedNumberValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'operationRelatedNumber' parameter.
 *
 * @see ResponseBag::$operationRelatedNumber Parameter 'operationRelatedNumber'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationRelatedNumberConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationRelatedNumber }} is not a valid \'operationRelatedNumber\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationRelatedNumberValidator::class;
    }
}

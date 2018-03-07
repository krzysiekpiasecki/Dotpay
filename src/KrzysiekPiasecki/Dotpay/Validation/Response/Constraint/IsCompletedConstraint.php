<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\IsCompletedValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'isCompleted' parameter.
 *
 * @see ResponseBag::$isCompleted Parameter 'isCompleted'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IsCompletedConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ isCompleted }} is not a valid \'isCompleted\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IsCompletedValidator::class;
    }
}

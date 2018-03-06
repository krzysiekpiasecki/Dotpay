<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\DeladdrValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'deladdr' parameter.
 *
 * @see RequestBag::$deladdr Parameter 'deladdr'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DeladdrConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ deladdr }} is not a valid \'deladdr\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return DeladdrValidator::class;
    }
}

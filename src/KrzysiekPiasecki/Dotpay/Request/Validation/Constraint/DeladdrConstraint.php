<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validation\DeladdrValidator;
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

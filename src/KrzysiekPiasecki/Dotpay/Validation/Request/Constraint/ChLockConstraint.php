<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\ChLockValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'chLock' parameter.
 *
 * @see RequestBag::$chLock Parameter 'chLock'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChLockConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ chLock }} is not a valid \'chLock\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ChLockValidator::class;
    }
}

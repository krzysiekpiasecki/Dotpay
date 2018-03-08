<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\PEmailValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'pEmail' parameter.
 *
 * @see ResponseBag::$pEmail Parameter 'pEmail'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PEmailConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ pEmail }} is not a valid \'pEmail\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return PEmailValidator::class;
    }
}

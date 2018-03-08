<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\PEmailValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Email;

/**
 * Constraint against 'pEmail' parameter.
 *
 * @see RequestBag::$pEmail Parameter 'pEmail'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PEmailConstraint extends Email
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

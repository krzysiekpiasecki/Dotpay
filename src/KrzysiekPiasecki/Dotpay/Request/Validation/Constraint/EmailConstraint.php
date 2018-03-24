<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validation\EmailValidator;
use KrzysiekPiasecki\Dotpay\RequestBag;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Email;

/**
 * Constraint against 'email' parameter.
 *
 * @see RequestBag::$email Parameter 'email'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class EmailConstraint extends Email
{
    /** @var string Constraint message */
    public $message = 'The value {{ email }} is not a valid \'email\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return EmailValidator::class;
    }
}

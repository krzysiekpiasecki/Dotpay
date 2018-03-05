<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\StreetN1Validator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'streetN1' parameter.
 *
 * @see RequestBag::$streetN1 Parameter 'streetN1'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StreetN1Constraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ streetN1 }} is not a valid \'streetN1\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StreetN1Validator::class;
    }
}

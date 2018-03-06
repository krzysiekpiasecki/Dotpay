<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\StreetN2Validator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'streetN2' parameter.
 *
 * @see RequestBag::$streetN2 Parameter 'streetN2'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StreetN2Constraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ streetN2 }} is not a valid \'streetN2\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StreetN2Validator::class;
    }
}

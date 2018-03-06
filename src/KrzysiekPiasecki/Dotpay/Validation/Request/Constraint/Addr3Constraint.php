<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\Addr3Validator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'addr3' parameter.
 *
 * @see RequestBag::$addr3 Parameter 'addr3'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class Addr3Constraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ addr3 }} is not a valid \'addr3\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return Addr3Validator::class;
    }
}

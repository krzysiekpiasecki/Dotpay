<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\URLCValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'URLC' parameter.
 *
 * @see RequestBag::$URLC Parameter 'URLC'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class URLCConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ URLC }} is not a valid \'URLC\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return URLCValidator::class;
    }
}

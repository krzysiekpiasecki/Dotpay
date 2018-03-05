<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\URLValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'URL' parameter.
 *
 * @see RequestBag::$URL Parameter 'URL'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class URLConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ URL }} is not a valid \'URL\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return URLValidator::class;
    }
}

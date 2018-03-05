<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\StreetValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'street' parameter.
 *
 * @see RequestBag::$street Parameter 'street'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StreetConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ street }} is not a valid \'street\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StreetValidator::class;
    }
}

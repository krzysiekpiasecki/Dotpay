<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\CountryValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'country' parameter.
 *
 * @see RequestBag::$country Parameter 'country'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CountryConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ country }} is not a valid \'country\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CountryValidator::class;
    }
}

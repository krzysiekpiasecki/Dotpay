<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\CityValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'city' parameter.
 *
 * @see RequestBag::$city Parameter 'city'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CityConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ city }} is not a valid \'city\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CityValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\DescriptionValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'description' parameter.
 *
 * @see RequestBag::$description Parameter 'description'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DescriptionConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ description }} is not a valid \'description\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return DescriptionValidator::class;
    }
}

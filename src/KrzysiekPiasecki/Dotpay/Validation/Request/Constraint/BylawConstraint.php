<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\BylawValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'bylaw' parameter.
 *
 * @see RequestBag::$bylaw Parameter 'bylaw'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class BylawConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ bylaw }} is not a valid \'bylaw\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return BylawValidator::class;
    }
}

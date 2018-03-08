<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\IdValidator;
use Symfony\Component\Validator\Constraints\Range;

/**
 * Constraint against 'id' parameter.
 *
 * @see RequestBag::$id Parameter 'id'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IdConstraint extends Range
{
    /** @var string Constraint message */
    public $message = 'The value {{ id }} is not a valid \'id\' parameter';

    public $min = 1;

    public $max = 999999;

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IdValidator::class;
    }
}

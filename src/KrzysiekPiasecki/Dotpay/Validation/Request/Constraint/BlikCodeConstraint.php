<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\BlikCodeValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'blikCode' parameter.
 *
 * @see RequestBag::$blikCode Parameter 'blikCode'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class BlikCodeConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ blikCode }} is not a valid \'blikCode\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return BlikCodeValidator::class;
    }
}

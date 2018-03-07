<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\PInfoValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'pInfo' parameter.
 *
 * @see ResponseBag::$pInfo Parameter 'pInfo'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PInfoConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ pInfo }} is not a valid \'pInfo\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return PInfoValidator::class;
    }
}

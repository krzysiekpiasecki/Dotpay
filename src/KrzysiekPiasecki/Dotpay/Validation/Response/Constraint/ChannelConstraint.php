<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Response\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Response\ChannelValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'channel' parameter.
 *
 * @see ResponseBag::$channel Parameter 'channel'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChannelConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ channel }} is not a valid \'channel\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ChannelValidator::class;
    }
}

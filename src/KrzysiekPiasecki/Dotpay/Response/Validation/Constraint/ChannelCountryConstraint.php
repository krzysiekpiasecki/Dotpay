<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\ChannelCountryValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'channelCountry' parameter.
 *
 * @see ResponseBag::$channelCountry Parameter 'channelCountry'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChannelCountryConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ channelCountry }} is not a valid \'channelCountry\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ChannelCountryValidator::class;
    }
}

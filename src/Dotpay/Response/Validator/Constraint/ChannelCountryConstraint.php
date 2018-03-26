<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\ChannelCountryValidator;
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

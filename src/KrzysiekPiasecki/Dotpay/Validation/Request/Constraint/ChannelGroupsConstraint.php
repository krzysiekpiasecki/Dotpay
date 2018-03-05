<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\ChannelGroupsValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'channelGroups' parameter.
 *
 * @see RequestBag::$channelGroups Parameter 'channelGroups'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChannelGroupsConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ channelGroups }} is not a valid \'channelGroups\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ChannelGroupsValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\ChannelGroupsValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'channelGroups' parameter.
 *
 * @see Payment::$channelGroups Parameter 'channelGroups'
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

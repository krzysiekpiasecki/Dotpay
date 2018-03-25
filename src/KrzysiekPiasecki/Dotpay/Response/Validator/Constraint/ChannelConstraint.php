<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validator\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validator\ChannelValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'channel' parameter.
 *
 * @see ResponseBag::$channel Parameter 'channel'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChannelConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ channel }} is not a valid \'channel\' parameter';

    /**
     * Available channels.
     *
     * @var array
     */
    public static $values = [
        '71',
        '246',
        '248',
        '249',
        '249',
        '1',
        '2',
        '4',
        '6',
        '36',
        '38',
        '38',
        '44',
        '45',
        '46',
        '48',
        '50',
        '51',
        '56',
        '58',
        '60',
        '65',
        '66',
        '70',
        '72',
        '73',
        '74',
        '75',
        '76',
        '80',
        '81',
        '83',
        '84',
        '86',
        '87',
        '90',
        '91',
        '92',
        '7',
        '10',
        '15',
        '16',
        '32',
        '33',
        '88',
        '89',
        '11',
        '21',
        '31',
        '35',
        '82',
        '24',
        '52',
        '218',
        '55',
        '68',
        '212',
    ];

    /**
     * ChannelConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct(self::$values);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ChannelValidator::class;
    }
}

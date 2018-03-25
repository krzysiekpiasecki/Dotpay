<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\CurrencyValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'currency' parameter.
 *
 * @see RequestBag::$currency Parameter 'currency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CurrencyConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ currency }} is not a valid \'currency\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        'PLN',
        'EUR',
        'USD',
        'GBP',
        'JPY',
        'CZK',
        'SEK',
        'UAH',
        'RON',
    ];

    /**
     * CurrencyConstraint constructor.
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
        return CurrencyValidator::class;
    }
}

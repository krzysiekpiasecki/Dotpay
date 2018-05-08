<?php

declare(strict_types=1);

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\CurrencyValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'currency' parameter.
 *
 * @see Payment::$currency Parameter 'currency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CurrencyConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ value }} is not a valid \'currency\' parameter';

    /**
     * Available currencies.
     *
     * @var array
     */
    public $choices = [
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
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CurrencyValidator::class;
    }
}

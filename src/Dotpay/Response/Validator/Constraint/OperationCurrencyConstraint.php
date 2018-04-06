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

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\OperationCurrencyValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'operationCurrency' parameter.
 *
 * @see URLC::$operationCurrency Parameter 'operationCurrency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationCurrencyConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationCurrency }} is not a valid \'operationCurrency\' parameter';

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
     * OperationCurrencyConstraint constructor.
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
        return OperationCurrencyValidator::class;
    }
}

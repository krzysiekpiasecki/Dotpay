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

namespace Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\OperationOriginalCurrencyValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'operationOriginalCurrency' parameter.
 *
 * @see URLC::$operationOriginalCurrency Parameter 'operationOriginalCurrency'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationOriginalCurrencyConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationOriginalCurrency }} is not a valid \'operationOriginalCurrency\' parameter';

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
     * OperationOriginalCurrencyConstraint constructor.
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
        return OperationOriginalCurrencyValidator::class;
    }
}

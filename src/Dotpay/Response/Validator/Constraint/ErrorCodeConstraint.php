<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\ErrorCodeValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'error_code' parameter.
 *
 * @see ErrorBag::$error_code Parameter 'error_code'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ErrorCodeConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ value }} is not a valid \'error_code\' parameter';

    /**
     * Available error codes.
     *
     * @var array
     */
    public static $values = [
        'PAYMENT_EXPIRED',
        'UNKNOWN_CHANNEL',
        'DISABLED_CHANNEL',
        'UNKNOWN_CURRENCY',
        'BLOCKED_ACCOUNT',
        'INACTIVE_SELLER',
        'AMOUNT_TOO_LOW',
        'AMOUNT_TOO_HIGH',
        'BAD_DATA_FORMAT',
        'REQUIRED_PARAMETERS_NOT_PRESENT',
        'MULTIMERCHANT_INVALID_ACCOUNT_CONFIGURATION',
        'MULTIMERCHANT_INSUFFICIENT_AMOUNT',
        'MULTIMERCHANT_WRONG_CURRENCY',
        'UNKNOWN_ERROR',
    ];

    /**
     * ErrorCodeConstraint constructor.
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
        return ErrorCodeValidator::class;
    }
}

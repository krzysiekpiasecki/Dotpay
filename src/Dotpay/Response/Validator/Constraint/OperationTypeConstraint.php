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

use Dotpay\Response\Validator\OperationTypeValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'operationType' parameter.
 *
 * @see URLC::$operationType Parameter 'operationType'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationTypeConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationType }} is not a valid \'operationType\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        'payment',
        'payment_multimerchant_child',
        'payment_multimerchant_parent',
        'refund',
        'payout',
        'payout_any_amount',
        'release_rollback',
        'unidentified_payment',
        'complaint',
        'credit_card_registration',
    ];

    /**
     * OperationTypeConstraint constructor.
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
        return OperationTypeValidator::class;
    }
}

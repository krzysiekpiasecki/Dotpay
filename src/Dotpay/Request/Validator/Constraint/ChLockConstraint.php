<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\ChLockValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'chLock' parameter.
 *
 * @see Payment::$chLock Parameter 'chLock'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ChLockConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ chLock }} is not a valid \'chLock\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        '0',
        '1',
    ];

    /**
     * ChLockConstraint constructor.
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
        return ChLockValidator::class;
    }
}

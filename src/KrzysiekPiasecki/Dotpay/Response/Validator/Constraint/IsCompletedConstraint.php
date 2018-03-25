<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Response\Validator\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validator\IsCompletedValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'isCompleted' parameter.
 *
 * @see ResponseBag::$isCompleted Parameter 'isCompleted'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IsCompletedConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ isCompleted }} is not a valid \'isCompleted\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        'true',
        'false',
    ];

    /**
     * IsCompletedConstraint constructor.
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
        return IsCompletedValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\OperationStatusValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'operationStatus' parameter.
 *
 * @see URLC::$operationStatus Parameter 'operationStatus'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationStatusConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationStatus }} is not a valid \'operationStatus\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        'new',
        'processing',
        'completed',
        'rejected',
        'processing_realization_waiting',
        'processing_realization',
    ];

    /**
     * OperationStatusConstraint constructor.
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
        return OperationStatusValidator::class;
    }
}

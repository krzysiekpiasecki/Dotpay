<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\TypeValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'type' parameter.
 *
 * @see RequestBag::$type Parameter 'type'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class TypeConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ type }} is not a valid \'type\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        '0',
        '2',
        '4',
    ];

    /**
     * TypeConstraint constructor.
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
        return TypeValidator::class;
    }
}

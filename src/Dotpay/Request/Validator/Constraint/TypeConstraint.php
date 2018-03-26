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

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\TypeValidator;
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

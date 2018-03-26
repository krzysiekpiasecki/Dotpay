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

use Dotpay\Request\Validator\BylawValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'bylaw' parameter.
 *
 * @see RequestBag::$bylaw Parameter 'bylaw'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class BylawConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ bylaw }} is not a valid \'bylaw\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        '1',
    ];

    /**
     * BylawConstraint constructor.
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
        return BylawValidator::class;
    }
}

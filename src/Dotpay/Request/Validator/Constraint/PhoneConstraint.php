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

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\PhoneValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'phone' parameter.
 *
 * @see Payment::$phone Parameter 'phone'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PhoneConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ phone }} is not a valid \'phone\' parameter';

    /** @var string regex pattern */
    public $pattern = ' ^[\\d \\+\\-_]{0,20}$^';

    /**
     * PhoneConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return PhoneValidator::class;
    }
}

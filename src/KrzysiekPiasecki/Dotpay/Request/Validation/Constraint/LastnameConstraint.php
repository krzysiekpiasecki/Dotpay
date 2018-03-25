<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validation\LastnameValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'lastname' parameter.
 *
 * @see RequestBag::$lastname Parameter 'lastname'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class LastnameConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ lastname }} is not a valid \'lastname\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{0,50}$^';

    /**
     * Lastname constructor.
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
        return LastnameValidator::class;
    }
}

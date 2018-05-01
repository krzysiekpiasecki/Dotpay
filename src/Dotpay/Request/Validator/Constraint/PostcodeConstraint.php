<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\PostcodeValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'postcode' parameter.
 *
 * @see Payment::$postcode Parameter 'postcode'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PostcodeConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ postcode }} is not a valid \'postcode\' parameter';

    /** @var string regex pattern */
    public $pattern = '^.{0,20}$^';

    /**
     * PostcodeConstraint constructor.
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
        return PostcodeValidator::class;
    }
}

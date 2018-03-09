<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\StreetValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'street' parameter.
 *
 * @see RequestBag::$street Parameter 'street'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StreetConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ street }} is not a valid \'street\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{0,30}$^';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StreetValidator::class;
    }

    /**
     * StreetConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }
}

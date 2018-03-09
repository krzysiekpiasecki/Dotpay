<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\StreetN1Validator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'streetN1' parameter.
 *
 * @see RequestBag::$streetN1 Parameter 'streetN1'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StreetN1Constraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ streetN1 }} is not a valid \'streetN1\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{0,30}$^';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StreetN1Validator::class;
    }

    /**
     * StreetN1Constraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }
}

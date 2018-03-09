<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\StreetN2Validator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'streetN2' parameter.
 *
 * @see RequestBag::$streetN2 Parameter 'streetN2'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StreetN2Constraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ streetN2 }} is not a valid \'streetN2\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{0,30}$^';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StreetN2Validator::class;
    }

    /**
     * StreetN2Constraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }
}

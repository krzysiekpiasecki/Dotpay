<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validator\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validator\AmountValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'amount' parameter.
 *
 * @see RequestBag::$amount Parameter 'amount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class AmountConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ amount }} is not a valid \'amount\' parameter';

    public $pattern = '^(0|([1-9][0-9]*))(\\.[0-9]+)?$^';

    /**
     * AmountConstraint constructor.
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
        return AmountValidator::class;
    }
}

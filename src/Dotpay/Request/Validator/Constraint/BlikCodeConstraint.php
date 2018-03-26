<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\BlikCodeValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'blikCode' parameter.
 *
 * @see RequestBag::$blikCode Parameter 'blikCode'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class BlikCodeConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ blikCode }} is not a valid \'blikCode\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[0-9]\d*$';

    /**
     * BlikcodeConstraint constructor.
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
        return BlikCodeValidator::class;
    }
}

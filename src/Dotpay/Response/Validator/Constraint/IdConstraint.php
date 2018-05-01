<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\IdValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'id' parameter.
 *
 * @see URLC::$id Parameter 'id'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IdConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ id }} is not a valid \'id\' parameter';

    /** @var string regex pattern */
    public $pattern = '/^[1-9][0-9]{0,5}$/';

    /**
     * IdConstraint constructor.
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
        return IdValidator::class;
    }
}

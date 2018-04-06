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

use Dotpay\Request\Validator\FirstnameValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'firstname' parameter.
 *
 * @see Payment::$firstname Parameter 'firstname'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class FirstnameConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ firstname }} is not a valid \'firstname\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{0,50}$^';

    /**
     * FirstnameConstraint constructor.
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
        return FirstnameValidator::class;
    }
}

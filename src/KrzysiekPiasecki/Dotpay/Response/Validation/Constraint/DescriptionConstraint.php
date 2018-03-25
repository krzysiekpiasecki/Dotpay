<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\DescriptionValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'description' parameter.
 *
 * @see ResponseBag::$description Parameter 'description'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DescriptionConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ description }} is not a valid \'description\' parameter';

    /** @var string regex pattern */
    public $pattern = '^[\\w\\d _\\-]{1,255}$^';

    /**
     * DescriptionConstraint constructor.
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
        return DescriptionValidator::class;
    }
}

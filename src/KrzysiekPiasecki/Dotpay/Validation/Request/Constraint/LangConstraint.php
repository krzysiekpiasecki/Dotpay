<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\LangValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'lang' parameter.
 *
 * @see RequestBag::$lang Parameter 'lang'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class LangConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ lang }} is not a valid \'lang\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return LangValidator::class;
    }
}

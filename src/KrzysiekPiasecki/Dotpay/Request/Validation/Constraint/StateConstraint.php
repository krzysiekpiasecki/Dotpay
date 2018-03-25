<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validation\StateValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'state' parameter.
 *
 * @see RequestBag::$state Parameter 'state'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class StateConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ state }} is not a valid \'state\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return StateValidator::class;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Validation\Request\Constraint;

use KrzysiekPiasecki\Dotpay\Validation\Request\PersonalDataValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'personalData' parameter.
 *
 * @see RequestBag::$personalData Parameter 'personalData'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PersonalDataConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ personalData }} is not a valid \'personalData\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return PersonalDataValidator::class;
    }
}

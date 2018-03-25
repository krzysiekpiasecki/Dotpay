<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Request\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Request\Validation\PersonalDataValidator;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'personalData' parameter.
 *
 * @see RequestBag::$personalData Parameter 'personalData'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class PersonalDataConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ personalData }} is not a valid \'personalData\' parameter';

    /**
     * Available values.
     *
     * @var array
     */
    private static $values = [
        '1',
    ];

    /**
     * PersonalData constructor.
     */
    public function __construct()
    {
        parent::__construct(self::$values);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return PersonalDataValidator::class;
    }
}

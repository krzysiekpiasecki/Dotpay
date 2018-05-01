<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\CreditCardBrandCodeValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardBrandCode' parameter.
 *
 * @see URLC::$creditCardBrandCode Parameter 'creditCardBrandCode'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CreditCardBrandCodeConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ creditCardBrandCode }} is not a valid \'creditCardBrandCode\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CreditCardBrandCodeValidator::class;
    }
}

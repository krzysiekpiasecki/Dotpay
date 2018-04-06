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

namespace  Dotpay\Response\Validator\Constraint;

use Dotpay\Response\Validator\CreditCardBrandCodenameValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'creditCardBrandCodename' parameter.
 *
 * @see URLC::$creditCardBrandCodename Parameter 'creditCardBrandCodename'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class CreditCardBrandCodenameConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ creditCardBrandCodename }} is not a valid \'creditCardBrandCodename\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return CreditCardBrandCodenameValidator::class;
    }
}

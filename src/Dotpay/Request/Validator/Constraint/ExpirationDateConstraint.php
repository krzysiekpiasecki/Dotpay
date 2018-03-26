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

use Dotpay\Request\Validator\ExpirationDateValidator;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Constraint against 'expirationDate' parameter.
 *
 * @see RequestBag::$expirationDate Parameter 'expirationDate'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ExpirationDateConstraint extends DateTime
{
    /** @var string Constraint message */
    public $message = 'The value {{ expirationDate }} is not a valid \'expirationDate\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return ExpirationDateValidator::class;
    }
}

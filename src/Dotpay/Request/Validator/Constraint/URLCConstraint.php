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

use Dotpay\Request\Validator\URLCValidator;
use Symfony\Component\Validator\Constraints\Url;

/**
 * Constraint against 'URLC' parameter.
 *
 * @see Payment::$URLC Parameter 'URLC'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class URLCConstraint extends Url
{
    /** @var string Constraint message */
    public $message = 'The value {{ URLC }} is not a valid \'URLC\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return URLCValidator::class;
    }
}

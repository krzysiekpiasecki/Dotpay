<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\URLValidator;
use Symfony\Component\Validator\Constraints\Url;

/**
 * Constraint against 'URL' parameter.
 *
 * @see RequestBag::$URL Parameter 'URL'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class URLConstraint extends Url
{
    /** @var string Constraint message */
    public $message = 'The value {{ URL }} is not a valid \'URL\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return URLValidator::class;
    }
}

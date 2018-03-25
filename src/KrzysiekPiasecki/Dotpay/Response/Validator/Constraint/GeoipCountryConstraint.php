<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validator\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validator\GeoipCountryValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'geoipCountry' parameter.
 *
 * @see ResponseBag::$geoipCountry Parameter 'geoipCountry'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class GeoipCountryConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ geoipCountry }} is not a valid \'geoipCountry\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return GeoipCountryValidator::class;
    }
}

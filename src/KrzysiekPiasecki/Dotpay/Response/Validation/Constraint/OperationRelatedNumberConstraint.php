<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace  KrzysiekPiasecki\Dotpay\Response\Validation\Constraint;

use KrzysiekPiasecki\Dotpay\Response\Validation\OperationRelatedNumberValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'operationRelatedNumber' parameter.
 *
 * @see ResponseBag::$operationRelatedNumber Parameter 'operationRelatedNumber'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class OperationRelatedNumberConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ operationRelatedNumber }} is not a valid \'operationRelatedNumber\' parameter';

    public $pattern = '^M[0-9]{4,5}-[0-9]{4,5}^';

    /**
     * OperationRelatedNumberConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct($this->pattern);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return OperationRelatedNumberValidator::class;
    }
}

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

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\ButtontextValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'buttontext' parameter.
 *
 * @see RequestBag::$buttontext Parameter 'buttontext'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class ButtontextConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ buttontext }} is not a valid \'buttontext\' parameter';

    /** @var string regex pattern */
    public $pattern = '^.{4,100}$^';

    /**
     * BylawConstraint constructor.
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
        return ButtontextValidator::class;
    }
}

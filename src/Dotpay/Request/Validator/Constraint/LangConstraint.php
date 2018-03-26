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

use Dotpay\Request\Validator\LangValidator;
use Symfony\Component\Validator\Constraints\Choice;

/**
 * Constraint against 'lang' parameter.
 *
 * @see RequestBag::$lang Parameter 'lang'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class LangConstraint extends Choice
{
    /** @var string Constraint message */
    public $message = 'The value {{ lang }} is not a valid \'lang\' parameter';
    /**
     * Available languages.
     *
     * @var array
     */
    private static $languages = [
        'cz',
        'de',
        'en',
        'es',
        'fr',
        'hu',
        'it',
        'pl',
        'ro',
        'ru',
    ];

    /**
     * LangConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct(self::$languages);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return LangValidator::class;
    }
}

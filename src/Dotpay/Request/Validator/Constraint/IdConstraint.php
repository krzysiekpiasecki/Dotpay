<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\IdValidator;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * Constraint against 'id' parameter.
 *
 * @see Payment::$id Parameter 'id'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IdConstraint extends Regex
{
    /** @var string Constraint message */
    public $message = 'The value {{ value }} is not a valid \'id\' parameter';

    /** @var string regex pattern */
    public $pattern = '/^[1-9][0-9]{0,5}$/';

    /**
     * IdConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'pattern' => $this->pattern,
            'message' => $this->message,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IdValidator::class;
    }
}

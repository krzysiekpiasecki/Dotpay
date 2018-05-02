<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\IdValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'id' parameter.
 *
 * @see Payment::$id Parameter 'id'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class IdConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ value }} is not a valid \'id\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return IdValidator::class;
    }
}

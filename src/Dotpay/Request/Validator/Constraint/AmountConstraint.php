<?php

declare(strict_types=1);

namespace Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\AmountValidator;
use Symfony\Component\Validator\Constraint;

/**
 * Constraint against 'amount' parameter.
 *
 * @see Payment::$amount Parameter 'amount'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class AmountConstraint extends Constraint
{
    /** @var string Constraint message */
    public $message = 'The value {{ value }} is not a valid \'amount\' parameter';

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return AmountValidator::class;
    }
}

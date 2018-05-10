<?php

declare(strict_types=1);

namespace  Dotpay\Request\Validator\Constraint;

use Dotpay\Request\Validator\DescriptionValidator;
use Symfony\Component\Validator\Constraints\Length;

/**
 * Constraint against 'description' parameter.
 *
 * @see Payment::$description Parameter 'description'
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DescriptionConstraint extends Length
{
    /**
     * DescriptionConstraint constructor.
     */
    public function __construct()
    {
        parent::__construct([
            'min' => 1,
            'max' => 255
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return DescriptionValidator::class;
    }
}

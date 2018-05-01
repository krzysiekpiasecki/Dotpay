<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response;

use Dotpay\Response\Validator\Constraint\ErrorCodeConstraint;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ErrorCodeFormType extends BaseType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', ErrorCode::class);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'error_code',
                TextType::class,
                [
                    'constraints' => [
                        new ErrorCodeConstraint(),
                    ],
                ]
            );
    }
}

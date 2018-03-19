<?php
/**
 * Created by PhpStorm.
 * User: KPIASECK
 * Date: 2018-03-19
 * Time: 19:27
 */

namespace KrzysiekPiasecki\Dotpay\Request;

use KrzysiekPiasecki\Dotpay\RequestBag;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\AmountConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ApiVersionConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\CurrencyConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\IdConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\DescriptionConstraint;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;


class RequestFormType extends BaseType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', RequestBag::class);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('amount', TextType::class, array(
                    'constraints' => array(
                        new AmountConstraint()
                    )
                )
            )
            ->add('currency', TextType::class, array(
                    'constraints' => array(
                        new CurrencyConstraint()
                    )
                )
            )
            ->add('description', TextType::class, array(
                    'constraints' => array(
                        new DescriptionConstraint()
                    )
                )
            )->add('api_version', TextType::class, array(
                    'constraints' => array(
                        new ApiVersionConstraint()
                    )
                )
            )
            ->add('id', TextType::class, array(
                    'constraints' => array(
                        new IdConstraint()
                    )
                )
            );
    }

}
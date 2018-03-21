<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request;

use KrzysiekPiasecki\Dotpay\Response\ResponseBag;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\ChannelConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\ChannelCountryConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\ControlConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\CreditCardBrandCodeConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\CreditCardBrandCodenameConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\CreditCardIdConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\CreditCardIssuerIdentificationNumberConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\CreditCardMaskedNumberConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\DescriptionConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\EmailConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\GeoipCountryConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\IdConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\IsCompletedConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationAmountConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationCommissionAmountConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationCurrencyConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationDatetimeConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationNumberConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationOriginalAmountConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationOriginalCurrencyConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationRelatedNumberConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationStatusConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationTypeConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\OperationWithdrawalAmountConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\PEmailConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\PInfoConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\SignatureConstraint;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResponseFormType extends BaseType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('data_class', ResponseBag::class);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'id',
                TextType::class,
                [
                    'constraints' => [
                        new IdConstraint(),
                    ],
                ]
            )->add(
                'operation_number',
                TextType::class,
                [
                    'constraints' => [
                        new OperationNumberConstraint(),
                    ],
                ]
            )->add(
                'operation_type',
                TextType::class,
                [
                    'constraints' => [
                        new OperationTypeConstraint(),
                    ],
                ]
            )->add(
                'operation_status',
                TextType::class,
                [
                    'constraints' => [
                        new OperationStatusConstraint(),
                    ],
                ]
            )->add(
                'operation_amount',
                TextType::class,
                [
                    'constraints' => [
                        new OperationAmountConstraint(),
                    ],
                ]
            )->add(
                'operation_currency',
                TextType::class,
                [
                    'constraints' => [
                        new OperationCurrencyConstraint(),
                    ],
                ]
            )->add(
                'operation_withdrawal_amount',
                TextType::class,
                [
                    'constraints' => [
                        new OperationWithdrawalAmountConstraint(),
                    ],
                ]
            )->add(
                'operation_commission_amount',
                TextType::class,
                [
                    'constraints' => [
                        new OperationCommissionAmountConstraint(),
                    ],
                ]
            )->add(
                'is_completed',
                TextType::class,
                [
                    'constraints' => [
                        new IsCompletedConstraint(),
                    ],
                ]
            )->add(
                'operation_original_amount',
                TextType::class,
                [
                    'constraints' => [
                        new OperationOriginalAmountConstraint(),
                    ],
                ]
            )->add(
                'operation_original_currency',
                TextType::class,
                [
                    'constraints' => [
                        new OperationOriginalCurrencyConstraint(),
                    ],
                ]
            )->add(
                'operation_datetime',
                TextType::class,
                [
                    'constraints' => [
                        new OperationDatetimeConstraint(),
                    ],
                ]
            )->add(
                'operation_related_number',
                TextType::class,
                [
                    'constraints' => [
                        new OperationRelatedNumberConstraint(),
                    ],
                ]
            )->add(
                'control',
                TextType::class,
                [
                    'constraints' => [
                        new ControlConstraint(),
                    ],
                ]
            )->add(
                'description',
                TextType::class,
                [
                    'constraints' => [
                        new DescriptionConstraint(),
                    ],
                ]
            )->add(
                'email',
                TextType::class,
                [
                    'constraints' => [
                        new EmailConstraint(),
                    ],
                ]
            )->add(
                'p_info',
                TextType::class,
                [
                    'constraints' => [
                        new PInfoConstraint(),
                    ],
                ]
            )->add(
                'p_email',
                TextType::class,
                [
                    'constraints' => [
                        new PEmailConstraint(),
                    ],
                ]
            )->add(
                'credit_card_issuer_identification_number',
                TextType::class,
                [
                    'constraints' => [
                        new CreditCardIssuerIdentificationNumberConstraint(),
                    ],
                ]
            )->add(
                'credit_card_masked_number',
                TextType::class,
                [
                    'constraints' => [
                        new CreditCardMaskedNumberConstraint(),
                    ],
                ]
            )->add(
                'credit_card_brand_codename',
                TextType::class,
                [
                    'constraints' => [
                        new CreditCardBrandCodenameConstraint(),
                    ],
                ]
            )->add(
                'credit_card_brand_code',
                TextType::class,
                [
                    'constraints' => [
                        new CreditCardBrandCodeConstraint(),
                    ],
                ]
            )->add(
                'credit_card_id',
                TextType::class,
                [
                    'constraints' => [
                        new CreditCardIdConstraint(),
                    ],
                ]
            )->add(
                'channel',
                TextType::class,
                [
                    'constraints' => [
                        new ChannelConstraint(),
                    ],
                ]
            )->add(
                'channel_country',
                TextType::class,
                [
                    'constraints' => [
                        new ChannelCountryConstraint(),
                    ],
                ]
            )->add(
                'geoip_country',
                TextType::class,
                [
                    'constraints' => [
                        new GeoipCountryConstraint(),
                    ],
                ]
            )->add(
                'signature',
                TextType::class,
                [
                    'constraints' => [
                        new SignatureConstraint(),
                    ],
                ]
            );
    }
}
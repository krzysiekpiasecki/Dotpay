<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response;

use Dotpay\Response\Validator\Constraint\ChannelConstraint;
use Dotpay\Response\Validator\Constraint\ChannelCountryConstraint;
use Dotpay\Response\Validator\Constraint\ControlConstraint;
use Dotpay\Response\Validator\Constraint\CreditCardBrandCodeConstraint;
use Dotpay\Response\Validator\Constraint\CreditCardBrandCodenameConstraint;
use Dotpay\Response\Validator\Constraint\CreditCardIdConstraint;
use Dotpay\Response\Validator\Constraint\CreditCardIssuerIdentificationNumberConstraint;
use Dotpay\Response\Validator\Constraint\CreditCardMaskedNumberConstraint;
use Dotpay\Response\Validator\Constraint\DescriptionConstraint;
use Dotpay\Response\Validator\Constraint\EmailConstraint;
use Dotpay\Response\Validator\Constraint\GeoipCountryConstraint;
use Dotpay\Response\Validator\Constraint\IdConstraint;
use Dotpay\Response\Validator\Constraint\IsCompletedConstraint;
use Dotpay\Response\Validator\Constraint\OperationAmountConstraint;
use Dotpay\Response\Validator\Constraint\OperationCommissionAmountConstraint;
use Dotpay\Response\Validator\Constraint\OperationCurrencyConstraint;
use Dotpay\Response\Validator\Constraint\OperationDatetimeConstraint;
use Dotpay\Response\Validator\Constraint\OperationNumberConstraint;
use Dotpay\Response\Validator\Constraint\OperationOriginalAmountConstraint;
use Dotpay\Response\Validator\Constraint\OperationOriginalCurrencyConstraint;
use Dotpay\Response\Validator\Constraint\OperationRelatedNumberConstraint;
use Dotpay\Response\Validator\Constraint\OperationStatusConstraint;
use Dotpay\Response\Validator\Constraint\OperationTypeConstraint;
use Dotpay\Response\Validator\Constraint\OperationWithdrawalAmountConstraint;
use Dotpay\Response\Validator\Constraint\PEmailConstraint;
use Dotpay\Response\Validator\Constraint\PInfoConstraint;
use Dotpay\Response\Validator\Constraint\SignatureConstraint;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class URLCFormType extends BaseType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'pin' => '',
            'data_class', URLC::class,
        ]);
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
            )
            ->addEventListener(
                FormEvents::SUBMIT,
                [$this, 'onSubmit']
            );
    }

    public function onSubmit(FormEvent $event)
    {
        $responseBag = $event->getData();
        $signatureExpected = (new Signature(
            $event->getData(),
            $event->getForm()->getConfig()->getOptions()['pin']
        ))->__toString();

        if ($responseBag->signature !== $signatureExpected) {
            // Security issue!!! Throw SecurityException instead?
            throw new \RuntimeException('Invalid URLC signature!');
        }
    }
}

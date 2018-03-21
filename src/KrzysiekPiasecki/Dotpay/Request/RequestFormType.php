<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request;

use KrzysiekPiasecki\Dotpay\RequestBag;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\Addr3Constraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\AmountConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ApiVersionConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\BlikCodeConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ButtontextConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\BylawConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ChannelConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ChannelGroupsConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ChkConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ChLockConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\CityConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ControlConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\CountryConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\CurrencyConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\DeladdrConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\EmailConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\ExpirationDateConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\FirstnameConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\IdConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\LangConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\LastnameConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\PEmailConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\PersonalDataConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\PhoneConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\PInfoConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\PostcodeConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\StateConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\StreetConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\StreetN1Constraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\StreetN2Constraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\TypeConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\URLCConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Request\Constraint\URLConstraint;
use KrzysiekPiasecki\Dotpay\Validation\Response\Constraint\DescriptionConstraint;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
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
            ->add(
                'amount',
                TextType::class,
                [
                    'constraints' => [
                        new AmountConstraint(),
                    ],
                ]
            )
            ->add(
                'currency',
                TextType::class,
                [
                    'constraints' => [
                        new CurrencyConstraint(),
                    ],
                ]
            )
            ->add(
                'description',
                TextType::class,
                [
                    'constraints' => [
                        new DescriptionConstraint(),
                    ],
                ]
            )->add(
                'api_version',
                TextType::class,
                [
                    'constraints' => [
                        new ApiVersionConstraint(),
                    ],
                ]
            )
            ->add(
                'id',
                TextType::class,
                [
                    'constraints' => [
                        new IdConstraint(),
                    ],
                ]
            )
            ->add(
                'lang',
                TextType::class,
                [
                    'constraints' => [
                        new LangConstraint(),
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
                'ch_lock',
                TextType::class,
                [
                    'constraints' => [
                        new ChLockConstraint(),
                    ],
                ]
            )->add(
                'channel_groups',
                TextType::class,
                [
                    'constraints' => [
                        new ChannelGroupsConstraint(),
                    ],
                ]
            )->add(
                'URL',
                TextType::class,
                [
                    'constraints' => [
                        new URLConstraint(),
                    ],
                ]
            )->add(
                'type',
                TextType::class,
                [
                    'constraints' => [
                        new TypeConstraint(),
                    ],
                ]
            )->add(
                'buttontext',
                TextType::class,
                [
                    'constraints' => [
                        new ButtontextConstraint(),
                    ],
                ]
            )->add(
                'bylaw',
                TextType::class,
                [
                    'constraints' => [
                        new BylawConstraint(),
                    ],
                ]
            )->add(
                'personal_data',
                TextType::class,
                [
                    'constraints' => [
                        new PersonalDataConstraint(),
                    ],
                ]
            )->add(
                'URLC',
                TextType::class,
                [
                    'constraints' => [
                        new URLCConstraint(),
                    ],
                ]
            )->add(
                'expiration_date',
                TextType::class,
                [
                    'constraints' => [
                        new ExpirationDateConstraint(),
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
                'firstname',
                TextType::class,
                [
                    'constraints' => [
                        new FirstnameConstraint(),
                    ],
                ]
            )->add(
                'lastname',
                TextType::class,
                [
                    'constraints' => [
                        new LastnameConstraint(),
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
                'street',
                TextType::class,
                [
                    'constraints' => [
                        new StreetConstraint(),
                    ],
                ]
            )->add(
                'street_n1',
                TextType::class,
                [
                    'constraints' => [
                        new StreetN1Constraint(),
                    ],
                ]
            )->add(
                'street_n2',
                TextType::class,
                [
                    'constraints' => [
                        new StreetN2Constraint(),
                    ],
                ]
            )->add(
                'state',
                TextType::class,
                [
                    'constraints' => [
                        new StateConstraint(),
                    ],
                ]
            )->add(
                'addr3',
                TextType::class,
                [
                    'constraints' => [
                        new Addr3Constraint(),
                    ],
                ]
            )->add(
                'city',
                TextType::class,
                [
                    'constraints' => [
                        new CityConstraint(),
                    ],
                ]
            )->add(
                'postcode',
                TextType::class,
                [
                    'constraints' => [
                        new PostcodeConstraint(),
                    ],
                ]
            )->add(
                'phone',
                TextType::class,
                [
                    'constraints' => [
                        new PhoneConstraint(),
                    ],
                ]
            )->add(
                'country',
                TextType::class,
                [
                    'constraints' => [
                        new CountryConstraint(),
                    ],
                ]
            )->add(
                'deladdr',
                TextType::class,
                [
                    'constraints' => [
                        new DeladdrConstraint(),
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
                'blik_code',
                TextType::class,
                [
                    'constraints' => [
                        new BlikCodeConstraint(),
                    ],
                ]
            )->add(
                'chk',
                TextType::class,
                [
                    'constraints' => [
                        new ChkConstraint(),
                    ],
                ]
            );
    }
}

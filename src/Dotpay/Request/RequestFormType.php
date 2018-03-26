<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Request;

use Dotpay\Request\Validator\Constraint\Addr3Constraint;
use Dotpay\Request\Validator\Constraint\AmountConstraint;
use Dotpay\Request\Validator\Constraint\ApiVersionConstraint;
use Dotpay\Request\Validator\Constraint\BlikCodeConstraint;
use Dotpay\Request\Validator\Constraint\ButtontextConstraint;
use Dotpay\Request\Validator\Constraint\BylawConstraint;
use Dotpay\Request\Validator\Constraint\ChannelConstraint;
use Dotpay\Request\Validator\Constraint\ChannelGroupsConstraint;
use Dotpay\Request\Validator\Constraint\ChkConstraint;
use Dotpay\Request\Validator\Constraint\ChLockConstraint;
use Dotpay\Request\Validator\Constraint\CityConstraint;
use Dotpay\Request\Validator\Constraint\ControlConstraint;
use Dotpay\Request\Validator\Constraint\CountryConstraint;
use Dotpay\Request\Validator\Constraint\CurrencyConstraint;
use Dotpay\Request\Validator\Constraint\DeladdrConstraint;
use Dotpay\Request\Validator\Constraint\EmailConstraint;
use Dotpay\Request\Validator\Constraint\ExpirationDateConstraint;
use Dotpay\Request\Validator\Constraint\FirstnameConstraint;
use Dotpay\Request\Validator\Constraint\IdConstraint;
use Dotpay\Request\Validator\Constraint\LangConstraint;
use Dotpay\Request\Validator\Constraint\LastnameConstraint;
use Dotpay\Request\Validator\Constraint\PEmailConstraint;
use Dotpay\Request\Validator\Constraint\PersonalDataConstraint;
use Dotpay\Request\Validator\Constraint\PhoneConstraint;
use Dotpay\Request\Validator\Constraint\PInfoConstraint;
use Dotpay\Request\Validator\Constraint\PostcodeConstraint;
use Dotpay\Request\Validator\Constraint\StateConstraint;
use Dotpay\Request\Validator\Constraint\StreetConstraint;
use Dotpay\Request\Validator\Constraint\StreetN1Constraint;
use Dotpay\Request\Validator\Constraint\StreetN2Constraint;
use Dotpay\Request\Validator\Constraint\TypeConstraint;
use Dotpay\Request\Validator\Constraint\URLCConstraint;
use Dotpay\Request\Validator\Constraint\URLConstraint;
use Dotpay\Response\Validator\Constraint\DescriptionConstraint;
use Symfony\Component\Form\Extension\Core\Type\BaseType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
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
//            ->add(
//                'lang',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new LangConstraint(),
//                    ],
//                ]
//            )->add(
//                'channel',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new ChannelConstraint(),
//                    ],
//                ]
//            )->add(
//                'ch_lock',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new ChLockConstraint(),
//                    ],
//                ]
//            )->add(
//                'channel_groups',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new ChannelGroupsConstraint(),
//                    ],
//                ])

//            ->add(
//                'URL',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new URLConstraint(),
//                    ],
//                ]
//            )
            // ->add(
//                'type',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new TypeConstraint(),
//                    ],
//                ]
//            )

//        ->add(
//                'buttontext',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new ButtontextConstraint(),
//                    ],
//                ]
//            )
//
//->add(
//                'bylaw',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new BylawConstraint(),
//                    ],
//                ]
//            )->add(
//                'personal_data',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new PersonalDataConstraint(),
//                    ],
//                ]
//            )->add(
//                'URLC',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new URLCConstraint(),
//                    ],
//                ]
//            )->add(
//                'expiration_date',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new ExpirationDateConstraint(),
//                    ],
//                ]
//            )->add(
//                'control',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new ControlConstraint(),
//                    ],
//                ])
            ->add(
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
            )
// ->add(
//                'street',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new StreetConstraint(),
//                    ],
//                ]
//            )->add(
//                'street_n1',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new StreetN1Constraint(),
//                    ],
//                ]
//            )->add(
//                'street_n2',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new StreetN2Constraint(),
//                    ],
//                ]
//            )->add(
//                'state',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new StateConstraint(),
//                    ],
//                ]
//            )->add(
//                'addr3',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new Addr3Constraint(),
//                    ],
//                ]
//            )->add(
//                'city',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new CityConstraint(),
//                    ],
//                ]
//            )->add(
//                'postcode',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new PostcodeConstraint(),
//                    ],
//                ]
//            )->add(
//                'phone',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new PhoneConstraint(),
//                    ],
//                ]
//            )->add(
//                'country',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new CountryConstraint(),
//                    ],
//                ]
//            )->add(
//                'deladdr',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new DeladdrConstraint(),
//                    ],
//                ]
//            )->add(
//                'p_info',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new PInfoConstraint(),
//                    ],
//                ]
//            )->add(
//                'p_email',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new PEmailConstraint(),
//                    ],
//                ]
//            )->add(
//                'blik_code',
//                TextType::class,
//                [
//                    'constraints' => [
//                        new BlikCodeConstraint(),
//                    ],
//                ]
//            )
            ->add(
                'chk',
                TextType::class,
                [
                    'constraints' => [
                        new ChkConstraint(),
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
        $event->getData()->chk = (
        new CHK(
            $event->getData(),
            '1234'
        )
        )->__toString();
    }
}

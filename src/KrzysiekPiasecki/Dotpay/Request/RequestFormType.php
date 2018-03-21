<?php
/**
 * Created by PhpStorm.
 * User: KPIASECK
 * Date: 2018-03-19
 * Time: 19:27
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
            )
            ->add('lang', TextType::class, array(
                    'constraints' => array(
                        new LangConstraint()
                    )
                )
            )->add('channel', TextType::class, array(
                    'constraints' => array(
                        new ChannelConstraint()
                    )
                )
            )->add('ch_lock', TextType::class, array(
                    'constraints' => array(
                        new ChLockConstraint()
                    )
                )
            )->add('channel_groups', TextType::class, array(
                    'constraints' => array(
                        new ChannelGroupsConstraint()
                    )
                )
            )->add('URL', TextType::class, array(
                    'constraints' => array(
                        new URLConstraint()
                    )
                )
            )->add('type', TextType::class, array(
                    'constraints' => array(
                        new TypeConstraint()
                    )
                )
            )->add('buttontext', TextType::class, array(
                    'constraints' => array(
                        new ButtontextConstraint()
                    )
                )
            )->add('bylaw', TextType::class, array(
                    'constraints' => array(
                        new BylawConstraint()
                    )
                )
            )->add('personal_data', TextType::class, array(
                    'constraints' => array(
                        new PersonalDataConstraint()
                    )
                )
            )->add('URLC', TextType::class, array(
                    'constraints' => array(
                        new URLCConstraint()
                    )
                )
            )->add('expiration_date', TextType::class, array(
                    'constraints' => array(
                        new ExpirationDateConstraint()
                    )
                )
            )->add('control', TextType::class, array(
                    'constraints' => array(
                        new ControlConstraint()
                    )
                )
            )->add('firstname', TextType::class, array(
                    'constraints' => array(
                        new FirstnameConstraint()
                    )
                )
            )->add('lastname', TextType::class, array(
                    'constraints' => array(
                        new LastnameConstraint()
                    )
                )
            )->add('email', TextType::class, array(
                    'constraints' => array(
                        new EmailConstraint()
                    )
                )
            )->add('street', TextType::class, array(
                    'constraints' => array(
                        new StreetConstraint()
                    )
                )
            )->add('street_n1', TextType::class, array(
                    'constraints' => array(
                        new StreetN1Constraint()
                    )
                )
            )->add('street_n2', TextType::class, array(
                    'constraints' => array(
                        new StreetN2Constraint()
                    )
                )
            )->add('state', TextType::class, array(
                    'constraints' => array(
                        new StateConstraint()
                    )
                )
            )->add('addr3', TextType::class, array(
                    'constraints' => array(
                        new Addr3Constraint()
                    )
                )
            )->add('city', TextType::class, array(
                    'constraints' => array(
                        new CityConstraint()
                    )
                )
            )->add('postcode', TextType::class, array(
                    'constraints' => array(
                        new PostcodeConstraint()
                    )
                )
            )->add('phone', TextType::class, array(
                    'constraints' => array(
                        new PhoneConstraint()
                    )
                )
            )->add('country', TextType::class, array(
                    'constraints' => array(
                        new CountryConstraint()
                    )
                )
            )->add('deladdr', TextType::class, array(
                    'constraints' => array(
                        new DeladdrConstraint()
                    )
                )
            )->add('p_info', TextType::class, array(
                    'constraints' => array(
                        new PInfoConstraint()
                    )
                )
            )->add('p_email', TextType::class, array(
                    'constraints' => array(
                        new PEmailConstraint()
                    )
                )
            )->add('blik_code', TextType::class, array(
                    'constraints' => array(
                        new BlikCodeConstraint()
                    )
                )
            )->add('chk', TextType::class, array(
                    'constraints' => array(
                        new ChkConstraint()
                    )
                )
            );
    }

}
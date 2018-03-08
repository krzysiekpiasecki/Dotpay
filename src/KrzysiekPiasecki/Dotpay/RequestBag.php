<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay;

/**
 * Data structure to represent the request sent to Dotpay.
 */
class RequestBag
{
    /** @var string Api version */
    public $api_version;

    /** @var string Seller id */
    public $id;

    /** @var string Transaction amount */
    public $amount;

    /** @var string Currency ISO code */
    public $currency;

    /** @var string Transaction description */
    public $description;

    /**
     * @RequestConstraint\LangConstraint
     *
     * @var string Transaction language
     */
    public $lang;

    /** @var string Payment channel */
    public $channel;

    /** @var string Force channel */
    public $ch_lock;

    /** @var string Ignore last payment channel */
    public $ignore_last_payment_channel;

    /** @var string Channel groups */
    public $channel_groups;

    /** @var string Target URL after payment */
    public $URL;

    /** @var string Target URL type */
    public $type;

    /** @var string Back Button display text */
    public $buttontext;

    /** @var string Dotpay rules acceptance flag */
    public $bylaw;

    /** @var string Authorisation by the client to process his personal data */
    public $personal_data;

    /** @var string URL callback */
    public $URLC;

    /** @var string Date of expiration of the payment request. */
    public $expiration_date;

    /** @var string Transaction control number */
    public $control;

    /** @var string Client first name */
    public $firstname;

    /** @var string Client last name */
    public $lastname;

    /** @var string Client email address */
    public $email;

    /** @var string Client street name */
    public $street;

    /** @var string Client street number */
    public $street_n1;

    /** @var string Client apartment number */
    public $street_n2;

    /** @var string Client state name */
    public $state;

    /** @var string Additional Client address parameter */
    public $addr3;

    /** @var string Client city name */
    public $city;

    /** @var string Client address post code number */
    public $postcode;

    /** @var string Client phone number */
    public $phone;

    /** @var string Client country name */
    public $country;

    /** @var string Client delivery address */
    public $deladdr;

    /** @var string Seller name displayed on Dotpay pages */
    public $p_info;

    /** @var string Seller email displayed on Dotpay pages */
    public $p_email;

    /** @var string Blik code */
    public $blik_code;

    /** @var string Transaction Checksum */
    public $chk;
}

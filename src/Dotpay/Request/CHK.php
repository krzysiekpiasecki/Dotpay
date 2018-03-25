<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Request;

class CHK
{
    private $chk;

    public function __construct(RequestBag $bag, string $pin)
    {
        $this->chk = hash('sha256', sprintf(
            str_repeat('%s', 34),
            $pin,
            $bag->api_version,
            // $bag->charset,
            $bag->lang,
            $bag->id,
            // $bag->pid,
            $bag->amount,
            $bag->currency,
            $bag->description,
            $bag->control,
            $bag->channel,
            // $bag->credit_card_brand,
            $bag->ch_lock,
            $bag->channel_groups,
            // $bag->onlinetransfer,
            $bag->URL,
            $bag->type,
            $bag->buttontext,
            $bag->URLC,
            $bag->firstname,
            $bag->lastname,
            $bag->email,
            $bag->street,
            $bag->street_n1,
            $bag->street_n2,
            $bag->state,
            $bag->addr3,
            $bag->city,
            $bag->postcode,
            $bag->phone,
            $bag->country,
            // $bag->code,
            $bag->p_info,
            $bag->p_email,
            // $bag->n_email,
            $bag->expiration_date,
            $bag->deladdr,
            // $bag->recipient_account_number,
            // $bag->recipient_company,
            // $bag->recipient_first_name,
            // $bag->recipient_last_name,
            // $bag->recipient_address_street,
            // $bag->recipient_address_building,
            // $bag->recipient_address_apartment,
            // $bag->recipient_address_postcode,
            // $bag->recipient_address_city,
            // $bag->application,
            // $bag->application_version,
            // $bag->warranty,
            $bag->bylaw,
            $bag->personal_data,
            // $bag->credit_card_number,
            // $bag->credit_card_expiration_date_year,
            // $bag->credit_card_expiration_date_month,
            // $bag->credit_card_security_code,
            // $bag->credit_card_store,
            // $bag->credit_card_store_security_code,
            // $bag->credit_card_customer_id,
            // $bag->credit_card_id,
            // $bag->blik_code,
            // $bag->credit_card_registration,
            // $bag->recurring_frequency,
            // $bag->recurring_interval,
            // $bag->recurring_start,
            // $bag->recurring_count,
            // $bag->surcharge_amount,
            // $bag->surcharge,
            $bag->ignore_last_payment_channel
        ));
    }

    public function __toString(): string
    {
        return $this->chk;
    }
}

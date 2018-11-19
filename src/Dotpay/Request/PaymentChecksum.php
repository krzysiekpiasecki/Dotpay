<?php

declare(strict_types=1);

namespace Dotpay\Request;

final class PaymentChecksum
{
    private $chk;

    public function __construct(Payment $bag, string $pin)
    {
        $this->chk = hash('sha256', sprintf(
            str_repeat('%s', 34),
            $pin,
            $bag->api_version,
            $bag->lang,
            $bag->id,
            $bag->amount,
            $bag->currency,
            $bag->description,
            $bag->control,
            $bag->channel,
            $bag->ch_lock,
            $bag->channel_groups,
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
            $bag->p_info,
            $bag->p_email,
            $bag->expiration_date,
            $bag->deladdr,
            $bag->bylaw,
            $bag->personal_data,
            $bag->ignore_last_payment_channel
        ));
    }

    public function getChecksum(): string
    {
        return $this->chk;
    }

    public function __toString(): string
    {
        return $this->chk;
    }
}

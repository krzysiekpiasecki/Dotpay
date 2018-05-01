<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Response;

/**
 * Represents signature of Dotpay response.
 */
class Signature
{
    /**
     * @var string Response signature
     */
    private $signature;

    /**
     * ResponseSignature.
     *
     * @param URLC   $bag Response bag
     * @param string $pin Seller pin
     */
    public function __construct(URLC $bag, string $pin)
    {
        $this->signature = hash('sha256', sprintf(
            str_repeat('%s', 27),
            $pin,
            $bag->id,
            $bag->operation_number,
            $bag->operation_type,
            $bag->operation_status,
            $bag->operation_amount,
            $bag->operation_currency,
            $bag->operation_withdrawal_amount,
            $bag->operation_commission_amount,
            $bag->is_completed,
            $bag->operation_original_amount,
            $bag->operation_original_currency,
            $bag->operation_datetime,
            $bag->operation_related_number,
            $bag->control,
            $bag->description,
            $bag->email,
            $bag->p_info,
            $bag->p_email,
            $bag->credit_card_issuer_identification_number,
            $bag->credit_card_masked_number,
            $bag->credit_card_brand_codename,
            $bag->credit_card_brand_code,
            $bag->credit_card_id,
            $bag->channel,
            $bag->channel_country,
            $bag->geoip_country
        ));
    }

    /**
     * Returns a Dotpay response signature.
     *
     * <strong>Always ensure that signature is correct!</strong>
     *
     * @return string Dotpay response signature
     */
    public function __toString(): string
    {
        return $this->signature;
    }

    /**
     * Returns a Dotpay response signature.
     *
     * <strong>Always ensure that signature is correct!</strong>
     *
     * @return string Dotpay response signature
     *
     * @deprecated
     */
    public function signature(): string
    {
        return $this->signature;
    }
}

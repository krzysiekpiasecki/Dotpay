<?php

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
     * @param URLC   $urlc Response urlc
     * @param string $pin Seller pin
     */
    public function __construct(URLC $urlc, string $pin)
    {
        $this->signature = hash('sha256', sprintf(
            str_repeat('%s', 27),
            $pin,
            $urlc->id,
            $urlc->operation_number,
            $urlc->operation_type,
            $urlc->operation_status,
            $urlc->operation_amount,
            $urlc->operation_currency,
            $urlc->operation_withdrawal_amount,
            $urlc->operation_commission_amount,
            $urlc->is_completed,
            $urlc->operation_original_amount,
            $urlc->operation_original_currency,
            $urlc->operation_datetime,
            $urlc->operation_related_number,
            $urlc->control,
            $urlc->description,
            $urlc->email,
            $urlc->p_info,
            $urlc->p_email,
            $urlc->credit_card_issuer_identification_number,
            $urlc->credit_card_masked_number,
            $urlc->credit_card_brand_codename,
            $urlc->credit_card_brand_code,
            $urlc->credit_card_id,
            $urlc->channel,
            $urlc->channel_country,
            $urlc->geoip_country
        ));
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
    public function getSignature(): string
    {
        return $this->signature;
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
}

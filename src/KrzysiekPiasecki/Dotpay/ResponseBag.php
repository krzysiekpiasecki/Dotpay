<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay;

/**
 * Data structure to represent the response sent by Dotpay.
 */
class ResponseBag
{
    /** @var string Seller id */
    public $id;

    /** @var string Operation number */
    public $operation_number;

    /** @var string Operation type */
    public $operation_type;

    /** @var string Operation status */
    public $operation_status;

    /** @var string Operation amount */
    public $operation_amount;

    /** @var string Operation currency */
    public $operation_currency;

    /** @var string Operation withdrawal amount */
    public $operation_withdrawal_amount;

    /** @var string Operation commission amount */
    public $operation_commission_amount;

    /** @var string Parameter informing if the operation is completed */
    public $is_completed;

    /** @var string Operation original amount */
    public $operation_original_amount;

    /** @var string Operation original currency */
    public $operation_original_currency;

    /** @var string Operation datetime */
    public $operation_datetime;

    /** @var string Number of related operation */
    public $operation_related_number;

    /** @var string Operation control number */
    public $control;

    /** @var string Description */
    public $description;

    /** @var string Client email */
    public $email;

    /** @var string Seller name displayed on Dotpay page */
    public $p_info;

    /** @var string Seller email displayed on Dotpay page */
    public $p_email;

    /** @var string Credit card issuer identification number */
    public $credit_card_issuer_identification_number;

    /** @var string Credit card masked number */
    public $credit_card_masked_number;

    /** @var string Credit card brand codename */
    public $credit_card_brand_codename;

    /** @var string Credit card brand code */
    public $credit_card_brand_code;

    /** @var string Credit card id */
    public $credit_card_id;

    /** @var string Payment channel */
    public $channel;

    /** @var string Payment channel country */
    public $channel_country;

    /** @var string Payment channel country localization */
    public $geoip_country;

    /** @var string Checksum signature */
    public $signature;
}

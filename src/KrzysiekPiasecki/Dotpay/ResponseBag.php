<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay;

class ResponseBag
{
    public $id;

    public $operation_number;

    public $operation_type;

    public $operation_status;

    public $operation_amount;

    public $operation_currency;

    public $operation_withdrawal_amount;

    public $operation_commission_amount;

    public $is_completed;

    public $operation_original_amount;

    public $operation_original_currency;

    public $operation_datetime;

    public $operation_related_number;

    public $control;

    public $description;

    public $email;

    public $p_info;

    public $p_email;

    public $credit_card_issuer_identification_number;

    public $credit_card_masked_number;

    public $credit_card_brand_codename;

    public $credit_card_brand_code;

    public $credit_card_id;

    public $channel;

    public $channel_country;

    public $geoip_country;

    public $signature;
}

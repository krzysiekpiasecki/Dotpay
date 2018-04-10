<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Fake;

use Dotpay\Response\URLC;

class FakeURLC extends URLC
{
    public $id = '747789';

    public $operation_number = 'M1234-5678';

    public $operation_type = 'payment';

    public $operation_status = 'completed';

    public $operation_amount = '177.27';

    public $operation_currency = 'PLN';

    public $operation_withdrawal_amount = '176.00';

    public $operation_commission_amount = '-1.27';

    public $is_completed = 'true';

    public $operation_original_amount = '42.82';

    public $operation_original_currency = 'EUR';

    public $operation_datetime = '2014-06-01 12:06:37';

    public $operation_related_number = 'M1234-5678';

    public $control = 'ec4bf09d3dbe0cb71e6abc3ea44a7273';

    public $description = 'Faktura VAT 120/2014';

    public $email = 'jan.nowak@example.com';

    public $p_info = 'Capgeminix';

    public $p_email = 'biuro@capgeminix.pl';

    public $credit_card_issuer_identification_number = '603753';

    public $credit_card_masked_number = 'XXXX XXXX XXXX 6214';

    public $credit_card_brand_codename = 'visa';

    public $credit_card_brand_code = 'Visa';

    public $credit_card_id = '59f92e2bf8bedc36bec2219862448dd54dd19490de526e217589b37f43dc3eb2a4df294e71829a239eb7432d0eebbdad4c58eb13d6333ce71369184eb7ab02ae';

    public $channel = '248';

    public $channel_country = 'POL';

    public $geoip_country = 'POL';

    public $signature = '8363bf09482951fd69d76621cba469662a17205eee2c35097fd929023f573695';
}

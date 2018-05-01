<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Fake;

use Dotpay\Request\Payment;

class FakePayment extends Payment
{
    public $id = '747789';

    public $api_version = 'dev';

    public $amount = '100.00';

    public $currency = 'PLN';

    public $description = 'Platnosc za zamowienie 567915976';

    public $URL = 'https://www.example.com/thanks_page.php';

    public $type = '0';

    public $buttontext = 'Wroc do www.example.com';

    public $URLC = 'https://www.example.com/urlc_receiver.php';

    public $control = 'M1231MzaUdLQWR3';

    public $firstname = 'Jan';

    public $lastname = 'Nowak';

    public $email = 'jan.nowak@example.com';

    public $street = 'Warszawska';

    public $street_n1 = '1';

    public $city = 'Krakow';

    public $postcode = '12-345';

    public $phone = '123456789';

    public $country = 'POL';

    public $ignore_last_payment_channel = 'true';
}

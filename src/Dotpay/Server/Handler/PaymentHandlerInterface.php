<?php

namespace Dotpay\Server\Handler;

use Dotpay\Request\Payment;

interface PaymentHandlerInterface
{
    public function handle(Payment $bag);
}

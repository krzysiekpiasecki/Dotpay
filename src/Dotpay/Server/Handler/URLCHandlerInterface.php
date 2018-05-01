<?php

namespace Dotpay\Server\Handler;

use Dotpay\Response\URLC;

interface URLCHandlerInterface
{
    public function handle(URLC $bag);
}

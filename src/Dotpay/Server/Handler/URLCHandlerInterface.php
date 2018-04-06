<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Server\Handler;

use Dotpay\Response\URLC;

interface URLCHandlerInterface
{
    public function handle(URLC $bag);
}

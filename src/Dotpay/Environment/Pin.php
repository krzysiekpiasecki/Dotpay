<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Environment;

final class Pin
{
    private $pin;

    public function __construct(string $pin)
    {
        $this->pin = $pin;
    }

    public function __toString(): string
    {
        return $this->pin;
    }
}

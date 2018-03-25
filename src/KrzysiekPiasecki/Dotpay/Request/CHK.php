<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Request;

class CHK
{
    private $chk;

    public function __construct(RequestBag $requestBag, string $pin)
    {
        $this->chk = '1238471982fshizhdfjksfjdjfsdf';
    }

    public function __toString(): string
    {
        return $this->chk;
    }
}

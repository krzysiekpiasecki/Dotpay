<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25.03.2018
 * Time: 12:16
 */

namespace KrzysiekPiasecki\Dotpay\Request;

class CHK
{
    private $chk;

    public function __construct(RequestBag $requestBag, string $pin)
    {
        $this->chk = "1238471982fshizhdfjksfjdjfsdf";
    }

    public function __toString(): string {
        return $this->chk;
    }

}
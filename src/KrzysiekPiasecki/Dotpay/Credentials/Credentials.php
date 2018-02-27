<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace KrzysiekPiasecki\Dotpay\Credentials;

/**
 * Credentials.
 */
class Credentials
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pin;

    /**
     * Credentials.
     *
     * @param int    $id
     * @param string $pin
     */
    public function __construct($id, $pin)
    {
        $this->id = $id;
        $this->pin = $pin;
    }

    /**
     * @return int
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function pin()
    {
        return $this->pin;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay;

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

<?php

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Credentials;

/**
 * Represents Seller's credentials.
 */
interface CredentialsInterface
{
    /**
     * @return string Seller id
     */
    public function id(): string;

    /**
     * @return string Seller pin
     */
    public function pin(): string;
}

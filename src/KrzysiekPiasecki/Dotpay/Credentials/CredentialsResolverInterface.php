<?php

declare(strict_types=1);


/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace KrzysiekPiasecki\Dotpay\Credentials;

use KrzysiekPiasecki\Dotpay\CredentialsInterface;

interface CredentialsResolverInterface
{
    /**
     * @return CredentialsInterface
     */
    public function resolveCredentials(): CredentialsInterface;
}

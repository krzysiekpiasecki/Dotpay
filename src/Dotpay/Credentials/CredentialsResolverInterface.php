<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

namespace Dotpay\Credentials;

interface CredentialsResolverInterface
{
    /**
     * @return CredentialsInterface
     */
    public function resolveCredentials(): CredentialsInterface;
}

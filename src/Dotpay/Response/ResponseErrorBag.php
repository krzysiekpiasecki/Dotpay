<?php

/*
* This file is part of Dotpayds project.
* (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
*
* @license   https://opensource.org/licenses/MIT  The MIT License
*/

declare(strict_types=1);

namespace Dotpay\Response;

/**
 * Data structure to represent ErrorBag.
 */
class ResponseErrorBag
{
    /** @var string error_code */
    public $error_code;
}
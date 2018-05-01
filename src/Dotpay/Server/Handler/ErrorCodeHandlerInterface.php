<?php

namespace Dotpay\Server\Handler;

interface ErrorCodeHandlerInterface
{
    public function handle(string $errorCode);
}

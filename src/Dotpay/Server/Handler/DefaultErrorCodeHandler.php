<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Server\Handler;

use Dotpay\Response\ErrorCode;
use Dotpay\Response\ErrorCodeFormType;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validation;

class DefaultErrorCodeHandler implements RequestHandlerInterface
{
    private $errorCodeHandler;

    /**
     * DefaultErrorCodeHandler constructor.
     *
     * @param $errorCodeHandler
     */
    public function __construct(ErrorCodeHandlerInterface $errorCodeHandler)
    {
        $this->errorCodeHandler = $errorCodeHandler;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $httpFoundationFactory = new HttpFoundationFactory();
        $symfonyRequest = $httpFoundationFactory->createRequest($request);
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension(Validation::createValidator()))
            ->getFormFactory();
        $responseErrorCodeBag = new ErrorCode();
        $form = $formFactory->createNamed(
            null,
            ErrorCodeFormType::class,
            $responseErrorCodeBag
        );
        $form->submit([
            'error_code' => $request->getQueryParams()['error_code'],
        ]);
        if (!$form->isValid()) {
            throw new \RuntimeException('Invalid error code');
        }

        $this->errorCodeHandler->handle($request->getQueryParams()['error_code']);

        $symfonyResponse = new Response('', 200);
        $psr7Factory = new DiactorosFactory();
        $psrResponse = $psr7Factory->createResponse($symfonyResponse);

        return $psrResponse;
    }
}

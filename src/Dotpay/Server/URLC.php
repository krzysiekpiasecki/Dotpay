<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

declare(strict_types=1);

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Server;

use Dotpay\Response\ResponseBag;
use Dotpay\Response\ResponseFormType;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\HttpFoundationFactory;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\Validator\Validation;

class URLC implements MiddlewareInterface
{
    private $pin;

    /**
     * URLC constructor.
     *
     * @param $pin
     */
    public function __construct(string $pin)
    {
        $this->pin = $pin;
    }

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     *
     * @param ServerRequestInterface  $request
     * @param RequestHandlerInterface $handler
     *
     * @return ResponseInterface
     */
    public function process(
        ServerRequestInterface $request,
        RequestHandlerInterface $handler
    ): ResponseInterface {
        $httpFoundationFactory = new HttpFoundationFactory();
        $symfonyRequest = $httpFoundationFactory->createRequest($request);
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension(Validation::createValidator()))
            ->getFormFactory();
        $responseBag = new ResponseBag();
        $form = $formFactory->createNamed(
            null,
            ResponseFormType::class,
            $responseBag,
            ['pin' => $this->pin]
        );

        $form->submit([
            'id' => $request->getParsedBody()['id'],
            'operation_number' => $request->getParsedBody()['operation_number'],
            'operation_type' => $request->getParsedBody()['operation_type'],
            'operation_status' => $request->getParsedBody()['operation_status'],
            'operation_amount' => $request->getParsedBody()['operation_amount'],
            'operation_currency' => $request->getParsedBody()['operation_currency'],
            'operation_withdrawal_amount' => $request->getParsedBody()['operation_withdrawal_amount'],
            'operation_commission_amount' => $request->getParsedBody()['operation_commission_amount'],
            'is_completed' => $request->getParsedBody()['is_completed'],
            'operation_original_amount' => $request->getParsedBody()['operation_original_amount'],
            'operation_original_currency' => $request->getParsedBody()['operation_original_currency'],
            'operation_datetime' => $request->getParsedBody()['operation_datetime'],
            'operation_related_number' => $request->getParsedBody()['operation_related_number'],
            'control' => $request->getParsedBody()['control'],
            'desription' => $request->getParsedBody()['desription'],
            'email' => $request->getParsedBody()['email'],
            'p_info' => $request->getParsedBody()['p_info'],
            'p_email' => $request->getParsedBody()['p_email'],
            'credit_card_issuer_identification_number' => $request->getParsedBody()['credit_card_issuer_identification_number'],
            'credit_card_masked_number' => $request->getParsedBody()['credit_card_masked_number'],
            'credit_card_brand_codename' => $request->getParsedBody()['credit_card_brand_codename'],
            'credit_card_brand_code' => $request->getParsedBody()['credit_card_brand_code'],
            'credit_card_id' => $request->getParsedBody()['credit_card_id'],
            'channel' => $request->getParsedBody()['channel'],
            'channel_country' => $request->getParsedBody()['channel_country'],
            'geoip_country' => $request->getParsedBody()['geoip_country'],
            'signature' => $request->getParsedBody()['signature'],
        ]);

        if (!$form->isValid()) {
            throw new \RuntimeException('Invalid URLC callback');
        }

        return $handler->handle($request);
    }
}

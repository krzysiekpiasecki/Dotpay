<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

namespace Dotpay\Server\Handler;

use Dotpay\Response\URLC;
use Dotpay\Response\URLCFormType;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validation;

class DefaultURLCHandler implements RequestHandlerInterface
{
    /** @var URLCHandlerInterface */
    private $urlcHandler;

    /** @var string */
    private $pin;

    /**
     * DefaultURLCHandler constructor.
     *
     * @param URLCHandlerInterface $urlcHandler
     */
    public function __construct(string $pin, URLCHandlerInterface $urlcHandler)
    {
        $this->pin = $pin;
        $this->urlcHandler = $urlcHandler;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension(Validation::createValidator()))
            ->getFormFactory();
        $responseBag = new URLC();
        $form = $formFactory->createNamed(
            null,
            URLCFormType::class,
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
            'description' => $request->getParsedBody()['description'],
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

        $this->urlcHandler->handle($responseBag);

        $symfonyResponse = new Response('OK', '200');
        $psr7Factory = new DiactorosFactory();
        $psrResponse = $psr7Factory->createResponse($symfonyResponse);

        return $psrResponse;
    }
}

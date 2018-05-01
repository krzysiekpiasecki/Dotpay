<?php

namespace Dotpay\Server\Handler;

use Dotpay\Request\Payment;
use Dotpay\Request\PaymentFormType;
use Dotpay\Request\PaymentUrl;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Symfony\Bridge\PsrHttpMessage\Factory\DiactorosFactory;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Validator\Validation;

class PaymentHandler implements RequestHandlerInterface
{
    /** @var PaymentHandlerInterface */
    private $paymentHandler;

    /** @var string */
    private $pin;

    /** @var string */
    private $sellerID;

    /**
     * PaymentHandler constructor.
     *
     * @param string                  $sellerID
     * @param string                  $pin
     * @param PaymentHandlerInterface $paymentHandler
     */
    public function __construct(string $sellerID, string $pin, PaymentHandlerInterface $paymentHandler)
    {
        $this->pin = $pin;
        $this->sellerID = $sellerID;
        $this->paymentHandler = $paymentHandler;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $formFactory = Forms::createFormFactoryBuilder()
            ->addExtension(new ValidatorExtension(Validation::createValidator()))
            ->getFormFactory();
        $payment = new Payment();
        $form = $formFactory->createNamed(
            null,
            PaymentFormType::class,
            $payment,
            ['pin' => $this->pin]
        );

        $form->submit([
            'id' => $this->sellerID,
            'api_version' => $request->getParsedBody()['api_version'],
            'amount' => $request->getParsedBody()['amount'],
            'currency' => $request->getParsedBody()['currency'],
            'description' => $request->getParsedBody()['description'],
            'lang' => $request->getParsedBody()['lang'],
            'channel' => $request->getParsedBody()['channel'],
            'ch_lock' => $request->getParsedBody()['ch_lock'],
            'ignore_last_payment_channel' => $request->getParsedBody()['ignore_last_payment_channel'],
            'channel_groups' => $request->getParsedBody()['channel_groups'],
            'URL' => $request->getParsedBody()['URL'],
            'type' => $request->getParsedBody()['type'],
            'buttontext' => $request->getParsedBody()['buttontext'],
            'bylaw' => $request->getParsedBody()['bylaw'],
            'personal_data' => $request->getParsedBody()['personal_data'],
            'URLC' => $request->getParsedBody()['URLC'],
            'expiration_date' => $request->getParsedBody()['expiration_date'],
            'control' => $request->getParsedBody()['control'],
            'firstname' => $request->getParsedBody()['firstname'],
            'lastname' => $request->getParsedBody()['lastname'],
            'email' => $request->getParsedBody()['email'],
            'street' => $request->getParsedBody()['street'],
            'street_n1' => $request->getParsedBody()['street_n1'],
            'street_n2' => $request->getParsedBody()['street_n2'],
            'state' => $request->getParsedBody()['state'],
            'addr3' => $request->getParsedBody()['addr3'],
            'city' => $request->getParsedBody()['city'],
            'postcode' => $request->getParsedBody()['postcode'],
            'phone' => $request->getParsedBody()['phone'],
            'country' => $request->getParsedBody()['country'],
            'deladdr' => $request->getParsedBody()['deladdr'],
            'p_info' => $request->getParsedBody()['p_info'],
            'p_email' => $request->getParsedBody()['p_email'],
            'blik_code' => $request->getParsedBody()['blik_code'],
            'chk' => $request->getParsedBody()['chk'],
        ]);

        if (!$form->isValid()) {
            throw new \RuntimeException('Invalid Payment callback');
        }

        $this->paymentHandler->handle($payment);

        $symfonyResponse = new RedirectResponse(
            (new PaymentUrl(
                'https://ssl.dotpay.pl/test_payment',
                $this->sellerID,
                $payment
            ))->__toString()
        );

        $psr7Factory = new DiactorosFactory();
        $psrResponse = $psr7Factory->createResponse($symfonyResponse);

        return $psrResponse;
    }
}

<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

$loader = require_once 'vendor/autoload.php';

use Dotpay\Fake\FakeResponseBag;
use Dotpay\Response\ResponseFormType;
use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationExtension;
use Symfony\Component\Form\Extension\Validator\ValidatorExtension;
use Symfony\Component\Form\FormRenderer;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Csrf\CsrfTokenManager;
use Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator;
use Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage;
use Symfony\Component\Translation\Loader\XliffFileLoader;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Validator\Validation;

$request = Request::createFromGlobals();
$request = new Request(
    $_GET,
    $_POST
);

$request = Request::createFromGlobals();

if($request->get('completed')) {
    exit('Transaction was completed');
}

$session = new Session();
$csrfGenerator = new UriSafeTokenGenerator();
$csrfStorage = new SessionTokenStorage($session);
$csrfManager = new CsrfTokenManager($csrfGenerator, $csrfStorage);

/**
 * Twig Extension.
 */

// the Twig file that holds all the default markup for rendering forms
// this file comes with TwigBridge
$defaultFormTheme = 'form_div_layout.html.twig';

$vendorDirectory = realpath(__DIR__.'/../vendor');
// the path to TwigBridge library so Twig can locate the
// form_div_layout.html.twig file
$appVariableReflection = new \ReflectionClass('\Symfony\Bridge\Twig\AppVariable');
$vendorTwigBridgeDirectory = dirname($appVariableReflection->getFileName());
// the path to your other templates
$viewsDirectory = realpath(__DIR__.'/../views');

$twig = new Twig_Environment(new Twig_Loader_Filesystem([
    $viewsDirectory,
    $vendorTwigBridgeDirectory.'/Resources/views/Form',
]));
$formEngine = new TwigRendererEngine([$defaultFormTheme], $twig);
$twig->addRuntimeLoader(new \Twig_FactoryRuntimeLoader([
    FormRenderer::class => function () use ($formEngine, $csrfManager) {
        return new FormRenderer($formEngine, $csrfManager);
    },
]));

$twig->addExtension(new FormExtension());

// creates the Translator
$translator = new Translator('en');
// somehow load some translations into it
$translator->addLoader('xlf', new XliffFileLoader());
//$translator->addResource(
//    'xlf',
//    __DIR__.'/path/to/translations/messages.en.xlf',
//    'en'
//);

$twig->addExtension(new TranslationExtension($translator));

$session = new Session();

$csrfGenerator = new UriSafeTokenGenerator();
$csrfStorage = new SessionTokenStorage($session);
$csrfManager = new CsrfTokenManager($csrfGenerator, $csrfStorage);

$formFactory = Forms::createFormFactoryBuilder()
    ->addExtension(new HttpFoundationExtension())
    //->addExtension(new CsrfExtension($csrfManager))
    ->addExtension(new ValidatorExtension(Validation::createValidator()))
    ->getFormFactory();

$requestBag = new \Dotpay\Request\RequestBag();
$requestBag->id = '747789';
$requestBag->api_version = 'dev';
$requestBag->currency = 'PLN';
$requestBag->description = 'Faktura 1';
$requestBag->amount = '1,23';
$requestBag->firstname = 'Agnieszka';
$requestBag->lastname = 'Hunka';
$requestBag->email = 'robert.bystrzanowski@gmail.com';

$responseBag = new FakeResponseBag();

const MODE_RESPONSE = 1;

if (1 == MODE_RESPONSE) {

    $form = $formFactory->createNamed(
        null,
        ResponseFormType::class,
        $responseBag,
        [
            'action' => 'http://127.0.0.1:8080',
            'method' => 'GET',
        ]
    );


    $form->submit([
        'id' => '999999',
        'operation_number' => 'M1234-5678',
        'operation_type' => 'payment',
        'operation_status' => 'completed',
        'operation_amount' => '177.27',
        'operation_currency' => 'PLN',
        'operation_withdrawal_amount' => '176.00',
        'operation_commission_amount' => '-1.27',
        'is_completed' => 'true',
        'operation_original_amount' => '42.82',
        'operation_original_currency' => 'EUR',
        'operation_datetime' => '2014-06-01 12:06:37',
        'operation_related_number' => 'M1234-5678',
        'control' => 'ec4bf09d3dbe0cb71e6abc3ea44a7273',
        'description' => 'Faktura VAT 120/2014',
        'email' => 'jan.nowak@example.com',
        'p_info' => 'Capgeminix',
        'p_email' => 'biuro@capgeminix.pl',
        'credit_card_issuer_identification_number' => '603753',
        'credit_card_masked_number' => 'XXXX XXXX XXXX 6214',
        'credit_card_brand_codename' => 'visa',
        'credit_card_brand_code' => 'Visa',
        'credit_card_id' => '59f92e2bf8bedc36bec2219862448dd54dd19490de526e217589b37f43dc3eb2a4df294e71829a239eb7432d0eebbdad4c58eb13d6333ce71369184eb7ab02ae',
        'channel' => '248',
        'channel_country' => 'POL',
        'geoip_country' => 'POL',
        'signature' => '4e3f76e666abd6c9c25097f648c37148fef0b5c8caf7ba134746519362c83f11'
    ]);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        var_dump($responseBag);
        exit("Response delevired");
    }

    exit('End of the script');



}


$form = $formFactory->createNamed(
    null,
    \Dotpay\Request\RequestFormType::class,
    $requestBag,
    [
        'action' => 'http://127.0.0.1:8080',
        'method' => 'GET',
    ]
);

$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $response = new \Symfony\Component\HttpFoundation\RedirectResponse(
        sprintf('%s%s',
            'https://ssl.dotpay.pl/test_payment/?',
            $request->getQueryString()
        )
    );
    $response->send();
} else {
    echo $twig->render('new.html.twig', [
        'form' => $form->createView(),
    ]);

}

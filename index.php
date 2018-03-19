<?php

echo '<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />';

$loader = require_once 'vendor/autoload.php';

use Symfony\Bridge\Twig\Extension\FormExtension;
use Symfony\Bridge\Twig\Extension\TranslationExtension;
use Symfony\Bridge\Twig\Form\TwigRendererEngine;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Csrf\CsrfExtension;
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

$session = new Session();
$csrfGenerator = new UriSafeTokenGenerator();
$csrfStorage = new SessionTokenStorage($session);
$csrfManager = new CsrfTokenManager($csrfGenerator, $csrfStorage);



/**
 * Twig Extension
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

$twig = new Twig_Environment(new Twig_Loader_Filesystem(array(
    $viewsDirectory,
    $vendorTwigBridgeDirectory.'/Resources/views/Form',
)));
$formEngine = new TwigRendererEngine(array($defaultFormTheme), $twig);
$twig->addRuntimeLoader(new \Twig_FactoryRuntimeLoader(array(
    FormRenderer::class => function () use ($formEngine, $csrfManager) {
        return new FormRenderer($formEngine, $csrfManager);
    },
)));

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
    ->addExtension(new CsrfExtension($csrfManager))
    ->addExtension(new ValidatorExtension(Validation::createValidator()))
    ->getFormFactory();


$requestBag = new \KrzysiekPiasecki\Dotpay\RequestBag();

$form = $formFactory->createBuilder(
    \KrzysiekPiasecki\Dotpay\Request\RequestFormType::class,
    $requestBag,
    array(
//    'action' => 'http://ssl.dotpay.pl/t2/',
    'action' => 'index.php',
    'method' => 'POST',
    ))
    ->getForm();


$form->handleRequest($request);

if ($form->isSubmitted() && $form->isValid()) {
    $data = $form->getData();
} else {
    echo ($twig->render('new.html.twig', array(
        'form' => $form->createView(),
    )));
}

echo '<pre>';
var_dump($data);



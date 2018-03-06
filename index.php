<?php

/*
 * This file is part of Dotpayds project.
 * (c) Krzysztof Piasecki <krzysiekpiasecki@gmail.com>
 *
 * @license   https://opensource.org/licenses/MIT  The MIT License
 */

$loader = require_once 'vendor/autoload.php';

use Doctrine\Common\Annotations\AnnotationRegistry;

AnnotationRegistry::registerLoader([$loader, 'loadClass']);

$request = new \KrzysiekPiasecki\Dotpay\RequestBag();
$request->lang = 'asdf';

$validator = \Symfony\Component\Validator\Validation::createValidatorBuilder()
    ->enableAnnotationMapping()
    ->getValidator();

$result = $validator->validate($request);

var_dump($result);

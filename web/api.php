<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Kernel;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\HttpFoundation\Request;

ErrorHandler::register();

$request = Request::createFromGlobals();
$kernel = new Kernel('prod', false);
$response = $kernel->handle($request);
$response->send();

<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Kernel;
use Symfony\Component\ErrorHandler\Debug;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\HttpFoundation\Request;

Debug::enable();
$error_handler = ErrorHandler::register();

$request = Request::createFromGlobals();
$kernel = new Kernel('dev', true);

$response = $kernel->handle($request);
$response->send();

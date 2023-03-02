<?php

use Clarity\Clarity;
use Clarity\Components\Core\Router\Router;
use Clarity\Components\Http\Request\Request;

require_once "../Clarity/Clarity.php";

Clarity::initialize();

$response = Router::route(Request::current());
$response->display();
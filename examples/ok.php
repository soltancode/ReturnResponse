<?php

require '../vendor/autoload.php';

# If you don't use it as facade, import this.
use Soltancode\ReturnResponse\Facades\ReturnResponse;

$httpResponse = 200;
$data         = ['success' => true];
$message      = "Operation done successfully.";

# Using as facade:
return ReturnResponse::response($httpResponse, $data, $message);

# Using as helper:
return returnResponse()->response($httpResponse, $data, $message);

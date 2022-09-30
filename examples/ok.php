<?php

require '../vendor/autoload.php';

# If you use it as class (facade), import this.
use Soltancode\ReturnResponse\Facades\ReturnResponse;

$httpResponse = 200;
$data         = ['success' => true];
$message      = "Operation done successfully.";

# Using as class (facade):
return ReturnResponse::response($httpResponse, $data, $message);

# Using as helper:
return returnResponse()->response($httpResponse, $data, $message);
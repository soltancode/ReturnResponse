<?php

require '../vendor/autoload.php';

$httpResponse = 200;
$data         = ['success' => true];
$message      = "Operation done successfully.";

return returnResponse()->response($httpResponse, $data, $message);
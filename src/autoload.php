<?php

if (!function_exists('returnResponse')) {
    function returnResponse()
    {
        return new \Soltancode\ReturnResponse\ReturnResponse;
    }
}
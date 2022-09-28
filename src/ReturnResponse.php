<?php

namespace Soltancode\ReturnResponse;

use Soltancode\ReturnResponse\Interfaces\ReturnInterface;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\JsonResponse;

class ReturnResponse implements ReturnInterface
{
    /**
     * @param int $statusCode
     * @param $data
     * @param string|null $message
     * @return JsonResponse
     */
    public function response(int $statusCode, $data = [], ?string $message = null): JsonResponse
    {

        $response = ['status_code' => $statusCode];
        if(isset($message)){
            $response['message'] = $message;
        }

        $response['count'] = isset($data) ? count(json_decode(json_encode($data),1)) : 0;
        $response['data'] = $data;

        return Response::json($response, $statusCode);
    }
}
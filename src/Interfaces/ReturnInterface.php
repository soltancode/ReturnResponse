<?php

namespace Soltancode\ReturnResponse\Interfaces;

use Illuminate\Http\JsonResponse;

interface ReturnInterface
{
    /**
     * @param int $statusCode
     * @param $data
     * @param string|null $message
     * @return JsonResponse
     */
    public function response(int $statusCode, $data = [], ?string $message = null): JsonResponse;
}
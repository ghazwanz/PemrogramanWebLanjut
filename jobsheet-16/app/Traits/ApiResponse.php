<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    protected function apiSuccess(mixed $data, int $code = 200, ?string $message = null): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
        ], $code);
    }

    protected function apiError(mixed $errors, int $code, ?string $message = null): JsonResponse
    {
        return response()->json([
            'errors' => $errors,
            'message' => $message,
        ], $code);
    }
}

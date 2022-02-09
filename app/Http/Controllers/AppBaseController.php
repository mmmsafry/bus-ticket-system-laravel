<?php

namespace App\Http\Controllers;

use Illuminate\http\JsonResponse as JsonResponse;
use Illuminate\Support\Facades\Response as Response;

class AppBaseController extends Controller
{
    public function sendResponse($result, $message): JsonResponse
    {
        return Response::json($this->makeResponse($message, $result));
    }

    public function sendError($error, $code = 404): JsonResponse
    {
        return Response::json($this->makeError($error), $code);
    }

    public function sendValidationError($errors, $code = 422): JsonResponse
    {
        return Response::json(['errors' => $errors, 'message' => 'The given data was invalid'], $code);
    }

    public function sendSuccess($message): JsonResponse
    {
        return Response::json([
            'success' => true,
            'message' => $message,
        ], 200);
    }

    /**
     * @param string $message
     * @param mixed  $data
     *
     * @return array
     */
    private function makeResponse($message, $data)
    {
        return [
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ];
    }

    /**
     * @param string $message
     * @param array  $data
     *
     * @return array
     */
    private function makeError($message, array $data = [])
    {
        $res = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($data)) {
            $res['data'] = $data;
        }

        return $res;
    }
}

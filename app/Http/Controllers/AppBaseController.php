<?php

namespace App\Http\Controllers;

use App\Utils\ResponseUtil;
use Illuminate\Support\Facades\Response;

/**
 * @SWG\Swagger(
 *   basePath="/api/v1",
 *   @SWG\Info(
 *     title="Laravel Generator APIs",
 *     version="1.0.0",
 *   )
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{
    const SUCCESS_MESSAGE = 'Request successful';
    const FAILED_MESSAGE = 'Request failed';

    public function sendResponse($result, $message)
    {
        return Response::json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 422)
    {
        return Response::json(ResponseUtil::makeError($error), $code);
    }

    public function sendSuccess($message, $data = [])
    {
        return Response::json([
            'success' => true,
            'message' => $message,
            'data' => $data,
        ], 200);
    }
}

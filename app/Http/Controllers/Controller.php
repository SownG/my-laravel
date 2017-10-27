<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function responseErrors( $message, $statusCode = 200)
    {
        return response()->json([
            'message' => $message,
        ], $statusCode);
    }

    public function responseSuccess($data = null, $statusCode = 200)
    {
        $responseData = [];

        if($data) {
            $responseData['data'] = $data;
        }
        return response()->json(array_merge(['status' => 'SUCCESS'], $responseData), $statusCode);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ApiController extends Controller
{
    public function returnJsonResponse($message, $data = [], $status = TRUE, $response = Response::HTTP_OK)
    {
        return response()->json([
            'message'           =>$message,
            'data'              => $data,
            'status'            =>$status,
        ], $response);
    }
}

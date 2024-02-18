<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function returnResponse(array $response, $status_code = 200, array $headers = [], $cookie = [])
    {
        if (empty($cookie)) {
            return response()->json($response, $status_code, $headers);
        } else {
            return response()->json($response, $status_code, $headers)->withCookie(cookie($cookie['name'], $cookie['value']), $cookie['time'] ?? 980000, '/');
        }
    }
}

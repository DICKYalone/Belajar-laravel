<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->header("x-data") == "secret") {
            return $next($request);
        } else {
            return response()->json([
                "success" => false,
                "msg" => "auth not found."
            ], 400);
        }
    }
}

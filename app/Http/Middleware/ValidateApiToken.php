<?php

namespace App\Http\Middleware;

use Closure;

class ValidateApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->header('apiSecretKey') == env('API_HEADER_SECRET_KEY')) {
            return $next($request);
        }
        $response_data = [
            'status' => 1,
            'message' => 'Api header secret key not found.',
            'data'=>[]
        ];
        return response()->json($response_data);
    }
}

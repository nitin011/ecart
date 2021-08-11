<?php

namespace App\Http\Middleware;

use App\Models\Customers;
use App\User;
use Closure;
use App\Interfaces\Api\TranslationRepositoryInterface;

class RedirectIfNotExistToken
{
    public function handle($request, Closure $next)
    {
        $token = $request->header('Authorization');
        if ($token) {
            $token = explode(' ', $token);
            if (@$token[1]) {
                $token = $token[1];
            }
        }
        $customer = User::where('access_token', $token)->first();
        if (!$customer || empty($token)) {
            return response()->json([
                'status' => 101,
                'message' => "Access Token is invalid",
                'data' => []
            ]);
        }
        $request['user_id'] = $customer['user_id'];
        return $next($request);
    }
}

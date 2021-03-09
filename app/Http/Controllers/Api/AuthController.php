<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends ApiController
{
    public function login(Request $request)
    {
        try {
            if ($this->loginValidator($request->all())) {
                return $this->loginValidator($request->all());
            }
            return $this->createCredential($request->only('email', 'password'));

        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later', [],
                FALSE, Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return JsonResponse
     */
    public function logout()
    {
        try {
            $this->guard()->logout();
            return $this->returnJsonResponse('Successfully logged out');
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later',
                [], FALSE, Response::HTTP_BAD_REQUEST);
        }
    }
    /**
     * Refresh a token.
     *
     * @return JsonResponse
     */
    public function refresh()
    {
        try {
            return $this->createNewToken($this->guard()->refresh());
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later',
                [], FALSE, Response::HTTP_BAD_REQUEST);
        }
    }
    protected function createCredential($credentials)
    {
        if (!$token = $this->guard()->attempt($credentials)) {
            return $this->returnJsonResponse('Unauthorized',
                [], FALSE, Response::HTTP_UNAUTHORIZED);
        }
        if (auth('api')->user()->active == 0) {
            $this->logout();
            return $this->returnJsonResponse('Sorry, This account is blocked ',
                [],FALSE, Response::HTTP_UNAUTHORIZED);
        }
        else {
            return $this->createNewToken($token);
        }
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function createNewToken(string $token)
    {
        return $this->returnJsonResponse('success',
            [
                "credentials" =>[
                    'access_token'          => $token,
                    'token_type'            => 'bearer',
                    'expires_in'            => $this->guard()->factory()->getTTL() * 7200
                ],
                "profile" => [auth('api')->user()]
            ]
        );
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return Guard
     */
    public function guard()
    {
        return auth('api');
    }

    public function loginValidator($data)
    {
        $validator = Validator::make($data, [
            'email'=>'required|email|',
            'password'=>'required|string|min:3',
        ]);
        if ($validator->fails()) {
            return $this->returnJsonResponse($validator->errors(),
                [], FALSE, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
    }

}

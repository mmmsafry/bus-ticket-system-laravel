<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laminas\Diactoros\ResponseFactory;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\Diactoros\StreamFactory;
use Laminas\Diactoros\UploadedFileFactory;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory;

class AuthController extends AppBaseController
{
    /**
     * Registration
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'nic' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user' => $user, 'access_token' => $accessToken]);

    }

    /**
     * Login
     * @param Request $request
     * @return Response
     */
    public function login(Request $request)
    {
        $credentials = ['nic' => $request->nic, 'password' => $request->password];

        if (!auth()->attempt($credentials)) {
            return $this->sendError('The user credentials were incorrect', 401);
        }

        $psr = (new PsrHttpFactory(
            new ServerRequestFactory,
            new StreamFactory,
            new UploadedFileFactory,
            new ResponseFactory
        ))->createRequest($request);

        $accessTokenController = new AccessTokenController();

        $tokenResponse = $accessTokenController->issueToken($psr);
        $content = $tokenResponse->getContent();
        return $data = json_decode($content, true);


    }
}

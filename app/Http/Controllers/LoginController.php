<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\LoginService;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $loginService;

	function __construct(
		LoginService $loginService
	) {
		$this->loginService = $loginService;
	}

    public function login()
	{
		return $this->loginService->show();
	}

	public function register()
	{
		return $this->loginService->register();
	}

	public function forgotPassword()
	{
		return $this->loginService->forgotPassword();
	}

	public function singIn(LoginRequest $request)
	{
		try {
			return response()->json(['success' => 'login success']);
		} catch (\Throwable $th) {
			return response()->json();
		}
	}

	public function singUp(RegisterRequest $request)
	{
		try {
			return response()->json(['success' => 'register success']);
		} catch (\Throwable $th) {
			return response()->json();
		}
	}
}

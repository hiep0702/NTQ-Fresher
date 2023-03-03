<?php

namespace App\Http\Controllers;

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
}

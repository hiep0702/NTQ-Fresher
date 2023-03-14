<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin;
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
		$name = $request->name;
		$password = $request->password;

		if(Admin::where('name', $name)->where('password',$password)->get())
		{
			return view('clients.products');
		}
		else
		{
			return view('login.login');
		}

		// try {
		// 	return response()->json(['success' => 'login success']);
		// } catch (\Throwable $th) {
		// 	return response()->json();
		// }
	}

	public function singUp(RegisterRequest $request)
	{
		$data = $request->all();
		
		$register = $this->loginService->store($data);

		return view('login.register', compact('register'));

		// try {
		// 	return response()->json(['success' => 'register success']);
		// } catch (\Throwable $th) {
		// 	return response()->json();
		// }
	}
}

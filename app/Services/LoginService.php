<?php

namespace App\Services;

class LoginService
{

	/**
	 * The function show() returns the view Main.php with the data 
	 * 
	 * @return A view called Main with the data array.
	 */
	public function show()
	{
		return view('login.login');
	}
	
	public function register()
	{
		return view('login.register');
	}

	public function forgotPassword()
	{
		return view('login.forgotPassword');
	}

}
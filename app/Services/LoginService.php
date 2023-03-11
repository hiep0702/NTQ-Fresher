<?php

namespace App\Services;

use App\Repositories\RegisterRepository;

class LoginService
{
	protected $registerRepository;

	public function __construct(RegisterRepository $registerRepository)
	{
		$this->registerRepository = $registerRepository;
	}

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

	public function store($data)
	{
		return $this->registerRepository->create($data);
	}

}
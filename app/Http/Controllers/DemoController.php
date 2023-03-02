<?php

namespace App\Http\Controllers;

use App\Services\DemoService;

class DemoController extends Controller
{
	protected $demoService;

	function __construct(
		DemoService $demoService
	) {
		$this->demoService = $demoService;
	}


	/**
	 * It returns the result of calling the show() method on the demoService object
	 * 
	 * @return The show method of the DemoService class.
	 */
	public function login()
	{
		return $this->demoService->show();
	}

	public function register()
	{
		return $this->demoService->register();
	}

	public function forgotPassword()
	{
		return $this->demoService->forgotPassword();
	}

	public function showProduct()
	{
		return $this->demoService->showProduct();
	}

	public function productDetails()
	{
		return $this->demoService->productDetails();
	}

}

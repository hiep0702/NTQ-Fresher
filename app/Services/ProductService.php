<?php

namespace App\Services;

class ProductService
{

	/**
	 * The function show() returns the view Main.php with the data 
	 * 
	 * @return A view called Main with the data array.
	 */
	public function products()
	{
		return view('clients.products');
	}

	public function productDetails()
	{
		return view('clients.productDetail');
	}

}
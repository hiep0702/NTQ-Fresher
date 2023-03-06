<?php

namespace App\Services;

class CartService
{

	/**
	 * The function show() returns the view Main.php with the data 
	 * 
	 * @return A view called Main with the data array.
	 */
	
	 public function show()
	 {
		return view('clients.cart');
	 }
}
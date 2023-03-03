<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

	function __construct(
		ProductService $productService
	) {
		$this->productService = $productService;
	}

    public function products()
	{
		return $this->productService->products();
	}

	public function productDetails()
	{
		return $this->productService->productDetails();
	}
}

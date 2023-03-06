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

	public function chooseVar(Request $request)
	{
		$data = $request->all();
		$var = [
			'violet' => [
				'price' => 23,
				'orders' => 1536,
				//'revenue' => 789798,
				'images' => [
					'/assets/images/products/img-6.png',
				],
				'size' => [
					's' => [
						'stocks' => 5,
						'price' => 30,
					],
					'm' => [
						'stocks' => 5,
					],
					'l' => [
						'stocks' => 5,
					],
				]
			],
			'green' => [
				'price' => 23,
				'orders' => 2000,
				//'revenue' => 789798,
				'images' => [
					'/assets/images/products/img-6.png',
				],
				'size' => [
					's' => [
						'stocks' => 5,
						'price' => 24,
					],
					'm' => [
						'stocks' => 5,
					],
					'l' => [
						'stocks' => 5,
					],
				]
			],
			'blue' => [
				'price' => 22,
				'orders' => 2030,
				'revenue' => 55555,
				'images' => [
					'/assets/images/products/img-6.png',
				],
				'size' => [
					's' => [
						'stocks' => 5,

					],
					'm' => [
						'stocks' => 5,
						'price' => 24,
					],
					'l' => [
						'stocks' => 5,
						'price' => 24,
					],
				]
			]
		];

		$response = array_merge([
			'price' => 0,
			'orders' => 0,
			'revenue' => 0,
			'images' => [],
			'stocks' => 0
		], $var[strtolower($data['color'])] ?? []);

		$size = !empty($var[strtolower($data['color'])]['size'][strtolower($data['size'])]) ? $var[strtolower($data['color'])]['size'][strtolower($data['size'])] : [];
		$reponse = array_merge($response, $size);
		unset($reponse['size']);
		return $reponse;
	}
}

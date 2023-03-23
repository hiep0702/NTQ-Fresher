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

	public function productVariables()
	{
		// $this->productService->productVariables();
		return view('clients.productVariables');
	}

	public function create()
	{
		return view('clients.createProduct');
	}

	public function store(Request $request)
	{
		$this->productService->store($request->all());

		return redirect('products');
	}

	public function edit()
	{
		return view('clients.editProduct');
	}

	public function update($id, Request $request)
	{
		// $data = $request->all();

		// $product = $this->productService->update($data);


	}

	// public function chooseVar(Request $request)
	// {
	// 	$data = $request->all();
	// 	$var = [
	// 		'violet' => [
	// 			'price' => 23,
	// 			'orders' => 1536,
	// 			'revenue' => 8897,
	// 			'images' => [
	// 				'assets/images/products/img-8.png',
	// 			],
	// 			'size' => [
	// 				's' => [
	// 					'stocks' => 5,
	// 					'price' => 30,
	// 				],
	// 				'm' => [
	// 					'stocks' => 5,
	// 				],
	// 				'l' => [
	// 					'stocks' => 5,
	// 				],
	// 			]
	// 		],
	// 		'green' => [
	// 			'price' => 23,
	// 			'orders' => 2000,
	// 			'revenue' => 7897,
	// 			'images' => [
	// 				'/assets/images/products/img-6.png',
	// 			],
	// 			'size' => [
	// 				's' => [
	// 					'stocks' => 38,
	// 					'price' => 24,
	// 				],
	// 				'm' => [
	// 					'stocks' => 5,
	// 				],
	// 				'l' => [
	// 					'stocks' => 5,
	// 				],
	// 			]
	// 		],
	// 		'blue' => [
	// 			'price' => 22,
	// 			'orders' => 2030,
	// 			'revenue' => 55555,
	// 			'images' => [
	// 				'/assets/images/products/img-1.png',
	// 			],
	// 			'size' => [
	// 				's' => [
	// 					'stocks' => 5,

	// 				],
	// 				'm' => [
	// 					'stocks' => 5,
	// 					'price' => 24,
	// 				],
	// 				'l' => [
	// 					'stocks' => 5,
	// 					'price' => 24,
	// 				],
	// 			]
	// 		]
	// 	];

	// 	$response = array_merge([
	// 		'price' => 0,
	// 		'orders' => 0,
	// 		'revenue' => 0,
	// 		'images' => [],
	// 		'stocks' => 0
	// 	], $var[strtolower($data['color'])] ?? []);

	// 	$size = !empty($var[strtolower($data['color'])]['size'][strtolower($data['size'])]) ? $var[strtolower($data['color'])]['size'][strtolower($data['size'])] : [];
	// 	$reponse = array_merge($response, $size);
	// 	unset($reponse['size']);
	// 	return $reponse;
	// }

	// public function chooseSize(Request $request)
	// {
	// 	$data = $request->all();
	// 	$var = [
	// 		's' => [
	// 			'price' => 23,
	// 			'orders' => 1536,
	// 			'stocks' => 5,
	// 			'revenue' => 8897,
	// 			'images' => [
	// 				'/assets/images/products/img-6.png',
	// 			],
	// 		],
	// 		'm' => [
	// 			'price' => 25,
	// 			'orders' => 2336,
	// 			'stocks' => 7,
	// 			'revenue' => 3397,
	// 			'images' => [
	// 				'/assets/images/products/img-6.png',
	// 			],
	// 		],
	// 		'l' => [
	// 			'price' => 30,
	// 			'orders' => 1246,
	// 			'stocks' => 6,
	// 			'revenue' => 4897,
	// 			'images' => [
	// 				'/assets/images/products/img-6.png',
	// 			],
	// 		],
	// 		'xl' => [
	// 			'price' => 33,
	// 			'orders' => 536,
	// 			'stocks' => 15,
	// 			'revenue' => 2297,
	// 			'images' => [
	// 				'/assets/images/products/img-6.png',
	// 			],
	// 		],
	// 	];

	// 	$response = array_merge([
	// 		'price' => 0,
	// 		'orders' => 0,
	// 		'revenue' => 0,
	// 		'images' => [],
	// 		'stocks' => 0
	// 	], $var[strtolower($data['size'])] ?? []);

	// 	$size = !empty($var[strtolower($data['size'])]) ? $var[strtolower($data['color'])] : [];
	// 	$reponse = array_merge($response, $size);
	// 	unset($reponse['size']);
	// 	return $reponse;
	// }
}

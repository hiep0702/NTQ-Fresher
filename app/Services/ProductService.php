<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
	protected $productRepository;

	public function __construct(ProductRepository $productRepository)
	{
		$this->productRepository = $productRepository;
	}

	/**
	 * The function show() returns the view Main.php with the data 
	 * 
	 * @return A view called Main with the data array.
	 */
	public function products()
	{
		$data = $this->productRepository->getAll();

		return view('clients.products', compact('data'));
	}


	public function store($data)
	{
		return $this->productRepository->create($data);
	}

	public function update($data)
	{
		return $this->productRepository->update($data);
	}
}
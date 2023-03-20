<?php

namespace App\Services;

use App\Repositories\AttributeRepository;

class AttributeService
{
	protected $attributeRepository;

	public function __construct(AttributeRepository $attributeRepository)
	{
		$this->attributeRepository = $attributeRepository;
	}

	/**
	 * The function show() returns the view Main.php with the data 
	 * 
	 * @return A view called Main with the data array.
	 */

	public function store($data)
	{
		return $this->attributeRepository->create($data);
	}

}
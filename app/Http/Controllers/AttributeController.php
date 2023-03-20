<?php

namespace App\Http\Controllers;

use App\Services\AttributeService;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    protected $attributeService;

	function __construct(
		AttributeService $attributeService
	) {
		$this->attributeService = $attributeService;
	}

	public function create()
	{
		return view('clients.createAttribute');
	}

	public function store(Request $request)
	{
		$data = $request->all();
		
		$attr = $this->attributeService->store($data);

		// return view('clients.products', compact('attr'));
	}
}

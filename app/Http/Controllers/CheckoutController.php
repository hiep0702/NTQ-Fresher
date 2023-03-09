<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Services\CheckoutService;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    protected $checkoutService;

    function __construct(CheckoutService $checkoutService)
    {
        $this->checkoutService = $checkoutService;
    }

    public function show()
    {
        return $this->checkoutService->show();
    }

    public function checkout(CheckoutRequest $request)
    {      
        try {
            // $data = $request->validate();

            return response()->json(['success' => 'okokok']);
        } catch (\Throwable $th) {
            return response()->json();
        }
    }
}

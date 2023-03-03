<?php

namespace App\Http\Controllers;

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
}

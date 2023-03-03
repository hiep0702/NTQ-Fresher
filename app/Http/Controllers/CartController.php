<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
   protected $cartService;

   function __construct(CartService $cartService)
   {
    $this->cartService = $cartService;
   }

   public function cart()
   {
    return $this->cartService->show();
   }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CartController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Override the authenticated method to merge carts
    protected function authenticated(Request $request, $user)
    {
        // Merge guest cart with user cart
        $cartController = new CartController();
        $cartController->mergeCart();

        return redirect()->intended($this->redirectPath());
    }
}

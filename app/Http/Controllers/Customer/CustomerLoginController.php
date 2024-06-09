<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerLoginController extends Controller
{
    //

    public function index()
    {
        return view('login.login-customer', [
            "title" => "Login"
        ]);
    }

    // public function authenticate(Request $request)
    // {
    // }
}

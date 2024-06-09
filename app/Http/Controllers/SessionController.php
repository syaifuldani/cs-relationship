<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __invoke()
    {
        if (session('userData')) {
            if (session('userData')->role == 'staf-penjualan') {
                return redirect()->route('admin-dashboard');
            } elseif (session('userData')->role == 'staf-distribusi') {
                return redirect()->route('admin-dashboard');
            } elseif (session('userData')->role == 'customer') {
                return redirect()->route('customer-dashboard');
            }
        } else {
            return redirect()->route('homepage');
        }
    }
}

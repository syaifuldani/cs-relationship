<?php

namespace App\Http\Controllers\Customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaUserController extends Controller
{
    public function index()
    {
        return view('user.home-user', ['title' => 'Beranda']);
    }
}

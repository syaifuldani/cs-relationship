<?php

namespace App\Http\Controllers\Customer;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerRegisterController extends Controller
{
    public function index()
    {
        return view('register.register-customer', [
            "title" => "Register"
        ]);
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => "required|email",
            'username' => "required",
            'password' => "required|min:8",
            'konfirmasi_password' => 'required|same:password',

            // Informasi perusaan
            'nama_pegawai' => "required",
            'jabatan' => "required",
            'bbusaha' => "required",
            'nama_perusahaan' => "required",
            'nohp' => "required|numeric",
            'kbisnis' => "required",
            'bindustri' => "required",
            'alamat' => "required",
        ]);

        // var_dump($validated);
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'customer'
        ]);

        // dd('test');

        // Insert into customers table
        Customer::create([
            'login_id' => $user->id,
            'nama' => $request->nama_pegawai,
            'jabatan' => $request->jabatan,
            'nama_perusahaan' => $request->nama_perusahaan,
            'jenis_perusahaan' => $request->bbusaha,
            'no_hp' => $request->nohp,
            'email' => $request->email,
            'kegiatan_bisnis' => $request->kbisnis,
            'bidang_industri' => $request->bindustri,
            'alamat' => $request->alamat,
        ]);

        return redirect(route('login.login-customer'))->with('success', 'Register anda telah berhasil! Silahkan login!');
    }
}

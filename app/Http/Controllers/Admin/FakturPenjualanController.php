<?php

namespace App\Http\Controllers\Admin;

use App\Models\FakturPenjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FakturPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.order.FakturPenjualan',
            ['title' => 'Faktur Penjualan
        ']
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FakturPenjualan $fakturPenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FakturPenjualan $fakturPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FakturPenjualan $fakturPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FakturPenjualan $fakturPenjualan)
    {
        //
    }
}

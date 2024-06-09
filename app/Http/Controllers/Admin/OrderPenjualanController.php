<?php

namespace App\Http\Controllers\Admin;

use App\Models\OrderPenjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'admin.order.OrderPenjualan',
            ['title' => 'Order Penjualan']
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
    public function show(OrderPenjualan $orderPenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderPenjualan $orderPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderPenjualan $orderPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderPenjualan $orderPenjualan)
    {
        //
    }
}

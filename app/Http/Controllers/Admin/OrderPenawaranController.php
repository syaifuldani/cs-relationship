<?php

namespace App\Http\Controllers\Admin;

use App\Models\OrderPenawaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderPenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.order.OrderPenawaran', ['title' => 'Order Penawaran']);
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
    public function show(OrderPenawaran $orderPenawaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderPenawaran $orderPenawaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderPenawaran $orderPenawaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderPenawaran $orderPenawaran)
    {
        //
    }
}

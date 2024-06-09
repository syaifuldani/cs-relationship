<?php

namespace App\Http\Controllers\Customer;

use App\Models\OrderPermintaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderPermintaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexuser()
    {
        return view(
            'user.pesanan',
            ['title' => 'Pesanan']
        );
    }

    public function indexadmin()
    {
        return view(
            'admin.order.orderpermintaan',
            ['title' => 'Pesanan']
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'user.OrderPermintaan',
            ['title' => 'Order Permintaan']
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            ''
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderPermintaan $orderPermintaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderPermintaan $orderPermintaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderPermintaan $orderPermintaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderPermintaan $orderPermintaan)
    {
        //
    }
}

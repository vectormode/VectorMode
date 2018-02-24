<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $order = new Order;
        $order->customer_id = $input['customer_id'];
        $order->customer_name = $input['customer_name'];
        $order->customer_phone = $input['customer_phone'];
        $order->customer_address = $input['customer_address'];
        $order->total = $input['total'];
        $order->grandtotal_vat = $input['grandtotal_vat'];
        $order->delivery = $input['delivery'];
        $order->grandtotal = $input['grandtotal'];
        $order->save();
        foreach ($input['rows'] as $key => $value){
            $order->products()->attach(
                $input['product'][$key],
                [
                    'price'             => $input['price'][$key],
                    'qty'               => $input['qty'][$key],
                    'vat'               => $input['vat'][$key],
                    'row_total_price'   => $input['row_total_price'][$key]
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

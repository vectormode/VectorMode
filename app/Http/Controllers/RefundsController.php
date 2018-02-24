<?php

namespace App\Http\Controllers;

use App\Models\Refund;
use Illuminate\Http\Request;

use App\Http\Requests;

class RefundsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refunds = Refund::all();
        return view('refunds.index', compact('refunds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('refunds.create');
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
        $refund = new Refund;
        $refund->order_id = $input['order_id'];
        $refund->customer_id = $input['customer_id'];
        $refund->customer_name = $input['customer_name'];
        $refund->customer_phone = $input['customer_phone'];
        $refund->customer_address = $input['customer_address'];
        $refund->total = $input['total'];
        $refund->grandtotal_vat = $input['grandtotal_vat'];
        $refund->delivery = $input['delivery'];
        $refund->grandtotal = $input['grandtotal'];
        $refund->save();
        foreach ($input['rows'] as $key => $value){
            $refund->products()->attach(
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

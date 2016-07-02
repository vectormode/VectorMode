<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Stock;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = Stock::all();
        return view('stocks.index', compact('stocks', 'stocks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stocks.create');
    }

    /**
     * Stock a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stock(Stock $stock, Request $request)
    {
        $stock->create($request->all());
        \Alert::success('Your requested stock has been created.', 'Stock Created !');
        return redirect('/stocks');
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
        $stock = Stock::findOrFail($id);
        return view('stocks.edit', compact('stock'));
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
        $stock = Stock::findOrFail($id);
        $stock->fill(\Input::all());
        $stock->save();
        \Alert::success('Your requested stock info has been updated.', 'Stock Info Updated !');
        return \Redirect::to('/stocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();
        \Alert::info('Your requested stock has been deleted.', 'Stock Deleted !');
        return \Redirect::to('/stocks');
    }
}

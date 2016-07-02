<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Supplier;
use App\Models\Product;
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

        /*
         * Getting all product names and ids in one array
         */

        $products = Product::all();

        $product_names = [];

        foreach ($products as $product) {
            $product_names[$product->id] = $product->name;
        }


        /*
         * Getting all supplier names and ids in one array
         */
        $suppliers = Supplier::all();

        $supplier_names = [];

        foreach ($suppliers as $supplier) {
            $supplier_names[$supplier->id] = $supplier->name;
        }

        /*
         * Getting all store names and ids in one array
         */
        $stores = Store::all();

        $store_names = [];

        foreach ($stores as $store) {
            $store_names[$store->id] = $store->name;
        }

        return view('stocks.create', compact('product_names', 'supplier_names', 'store_names'));

    }

    /**
     * Stock a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Stock $stock, Request $request)
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

        /*
         * Getting all product names and ids in one array
         */

        $products = Product::all();

        $product_names = [];

        foreach ($products as $product) {
            $product_names[$product->id] = $product->name;
        }


        /*
         * Getting all supplier names and ids in one array
         */
        $suppliers = Supplier::all();

        $supplier_names = [];

        foreach ($suppliers as $supplier) {
            $supplier_names[$supplier->id] = $supplier->name;
        }

        /*
         * Getting all store names and ids in one array
         */
        $stores = Store::all();

        $store_names = [];

        foreach ($stores as $store) {
            $store_names[$store->id] = $store->name;
        }

        return view('stocks.edit', compact('stock', 'product_names', 'supplier_names', 'store_names'));
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

<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Sale;
use App\Models\SaleDetail;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sale = Sale::select('*', 'items.name as item_name')->join('sale_details', 'sale_details.sale_id', 'sales.id')->join('items', 'items.id', 'sale_details.item_id')->get();
        return view('sale.index', compact('sale'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item = Item::where('stock', '!=', 0)->get();
        return view('sale.create', compact('item'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'invoice_no'        => 'required|unique:sales',
        ]);

        $item                   = Item::where('id', $request->item_id)->first();
        if ($item->stock == 0){
            return redirect('/sale/create')->with('status', 'Stock Empty');
        } elseif ($item->stock < $request->qty){
            return redirect('/sale/create')->with('status', 'Stock Not Available');
        } else{
            Sale::create([
                'invoice_date'      => now(),
                'invoice_no'        => $request->invoice_no,
                'name_customer'     => $request->name_customer,
                'total_price'       => $request->qty*$item->selling_price,
            ]);

            $sale                   =   Sale::all()->last();
            SaleDetail::create([
                'sale_id'           => $sale->id,
                'item_id'           => $item->id,
                'qty'               => $request->qty,
                'unit_price'        => $item->selling_price,
            ]);

            $item = Item::findOrFail($request->item_id);
            $item->update([
                'stock'             => $item->stock-$request->qty,
            ]);
        }

        return redirect('/sale')->with('status', 'Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

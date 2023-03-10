<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = Item::all();
        return view('item.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'              => 'required|unique:items',
            'name'              => 'required',
            'selling_price'     => 'required',
            'purchase_price'    => 'required',
            'unit'              => 'required',
            'category'          => 'required',
            'stock'             => 'required',
        ]);

        Item::create($request->all());

        return redirect('/item')->with('status', 'Success');
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
    public function edit(string $id, Request $request)
    {
        $item = Item::find($id);
        return view('item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'code'              => 'required',
            'name'              => 'required',
            'selling_price'     => 'required',
            'purchase_price'    => 'required',
            'unit'              => 'required',
            'category'          => 'required',
            'stock'             => 'required',
        ]);

        $input = $request->all();
        $item = Item::findOrFail($id);
        $item->update($input);

        return redirect('/item')->with('status', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Item::destroy($id);
        return redirect('/item')->with('status', 'Deleted');
    }
}

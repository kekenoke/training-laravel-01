<?php

namespace App\Http\Controllers;

use App\category;
use App\Http\Requests\Item\StoreRequest;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Requests\StorePost;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::paginate(5);
        return view('items.index', ['items' => $items]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return string
     */
    public function create()
    {
        $categories = category::all()->pluck('name', 'id');
        return view('items.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Item::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
        ]);


        return redirect()->route('items.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $categories = category::all()->pluck('name','id');
        return view('items.edit', compact('item','categories'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $item->update([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
        ]);

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('items.index');

    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ItemResource;
use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = item::all();
        return ItemResource::collection($item);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        item::create([
            'item_id' => $request->item_id,
            'item_name' => $request->item_name,
            'base_harga' => $request->base_harga,
            'penambahan_damage' => $request->penambahan_damage
        ]);

        return ['message' => 'data has been saved'];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = item::all()->where('item_id', $id);
        return ['Shop' => ItemResource::collection($item)];
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
        $item = item::findOrFail($id);
        $item->update([
            'item_name' => $request->item_name,
            'base_harga' => $request->base_harga,
            'penambahan_damage' => $request->penambahan_damage
        ]);
        return ['message' => 'data has been updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = item::findOrFail($id);
        $item->delete();
        return ['message' => 'data has been deleted'];
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TerbeliResource;
use App\Models\terbeli;
use Illuminate\Http\Request;

class TerbeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terbeli = terbeli::all();
        return TerbeliResource::collection($terbeli);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        terbeli::create([
            'terbeli_id' => $request->terbeli_id,
            'item_id_terbeli' => $request->item_id_terbeli,
            'student_gamedata_id_terbeli' => $request->student_gamedata_id_terbeli,
            'harga' => $request->harga
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
        $terbeli = terbeli::all()->where('student_gamedata_id_terbeli', $id);
        return ['terbeli' => TerbeliResource::collection($terbeli)];
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
        $terbeli = terbeli::where('terbeli_id', $id);

        $terbeli->update([
            'item_id_terbeli' => $request->item_id_terbeli,
            'student_gamedata_id_terbeli' => $request->student_gamedata_id_terbeli,
            'harga' => $request->harga
        ]);

        return ['message' => 'data has been saved'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terbeli = terbeli::where('terbeli_id', $id);
        $terbeli->delete();
        return ['message' => 'data has been deleted'];
    }
}

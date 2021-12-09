<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TerbunuhResource;
use App\Models\terbunuh;
use Illuminate\Http\Request;

class TerbunuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terbunuh = terbunuh::all();
        return TerbunuhResource::collection($terbunuh);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        terbunuh::create([
            'terbunuh_id' => $request->terbunuh_id,
            'monster_id_terbunuh' => $request->monster_id_terbunuh,
            'student_gamedata_id_terbunuh' => $request->student_gamedata_id_terbunuh,
            'monster_base_health' => $request->monster_base_health,
            'monster_health_left' => $request->monster_health_left
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
        $terbunuh = terbunuh::all()->where('student_gamedata_id_terbunuh', $id);
        return ['terbunuh' => TerbunuhResource::collection($terbunuh)];
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
        $terbunuh = terbunuh::where('terbunuh_id', $id);
        $terbunuh->update([
            'monster_id_terbunuh' => $request->monster_id_terbunuh,
            'student_gamedata_id_terbunuh' => $request->student_gamedata_id_terbunuh,
            'monster_base_health' => $request->monster_base_health,
            'monster_health_left' => $request->monster_health_left
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
        $terbunuh = terbunuh::where('terbunuh_id', $id);
        $terbunuh->delete();
        return ['message' => 'data has been deleted'];
    }
}

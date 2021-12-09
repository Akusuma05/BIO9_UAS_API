<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TerjawabResource;
use App\Models\terjawab;
use Illuminate\Http\Request;

class TerjawabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terjawab = terjawab::all();
        return TerjawabResource::collection($terjawab);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        terjawab::create([
            'terjawab_id' => $request->terjawab_id,
            'pertanyaan_id_terjawab' => $request->pertanyaan_id_terjawab,
            'student_gamedata_id_terjawab' => $request->student_gamedata_id_terjawab
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
        $terjawab = terjawab::all()->where('student_gamedata_id_terjawab', $id);
        return ['terjawab' => TerjawabResource::collection($terjawab)];
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
        $terjawab = terjawab::where('terjawab_id', $id);
        $terjawab->update([
            'pertanyaan_id_terjawab' => $request->pertanyaan_id_terjawab,
            'student_gamedata_id_terjawab' => $request->student_gamedata_id_terjawab
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
        $terjawab = terjawab::where('terjawab_id', $id);
        $terjawab->delete();
        return ['message' => 'data has been deleted'];
    }
}

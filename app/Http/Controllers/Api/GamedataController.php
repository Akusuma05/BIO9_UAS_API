<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\GamedataResource;
use App\Models\gamedata;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamedataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamedata = gamedata::all();
        return GamedataResource::collection($gamedata);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        gamedata::create([
            'student_gamedata_id' => $request->student_gamedata_id,
            'student_id_gamedata' => $request->student_id_gamedata,
            'total_damage' => $request->total_damage,
            'health_left' => $request->health_left,
            'money' => $request->money,
            'time_left' => $request->time_left,
            'current_damage' => $request->current_damage,
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
        $gamedata = gamedata::all()->where('student_id_gamedata', $id);
        return ['gamedata' => GamedataResource::collection($gamedata)];
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
        $gamedata = gamedata::findOrFail($id);
        $gamedata->update([
            'student_id_gamedata' => $request->student_id_gamedata,
            'total_damage' => $request->total_damage,
            'health_left' => $request->health_left,
            'money' => $request->money,
            'time_left' => $request->time_left,
            'current_damage' => $request->current_damage,
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
        $gamedata = gamedata::findOrFail($id);
        $gamedata->delete();
        return ['message' => 'data has been deleted'];
    }
}

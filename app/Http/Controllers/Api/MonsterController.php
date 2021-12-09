<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MonsterResource;
use App\Models\monster;
use Illuminate\Http\Request;

class MonsterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monster = monster::all();
        return MonsterResource::collection($monster);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        monster::create([
            'monster_id' => $request->monster_id,
            'monster_name' => $request->monster_name,
            'monster_image_path_idle' => $request->monster_image_path_idle,
            'monster_image_path_attack' => $request->monster_image_path_attack,
            'monster_image_path_dead' => $request->monster_image_path_dead
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
        $monster = monster::all()->where('monster_id', $id);
        return ['Monster' => MonsterResource::collection($monster)];
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
        $monster = monster::findOrFail($id);
        $monster->update([
            'monster_name' => $request->monster_name,
            'monster_image_path_idle' => $request->monster_image_path_idle,
            'monster_image_path_attack' => $request->monster_image_path_attack,
            'monster_image_path_dead' => $request->monster_image_path_dead
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
        $monster = monster::findOrFail($id);
        $monster->delete();
        return ['message' => 'data has been deleted'];
    }
}

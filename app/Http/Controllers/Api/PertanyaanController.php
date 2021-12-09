<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PertanyaanResource;
use App\Models\pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = pertanyaan::all();
        return PertanyaanResource::collection($pertanyaan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        pertanyaan::create([
            'pertanyaan_id' => $request->pertanyaan_id,
            'pertanyaan' => $request->pertanyaan,
            'jawaban_benar' => $request->jawaban_benar,
            'jawaban_salah1' => $request->jawaban_salah1,
            'jawaban_salah2' => $request->jawaban_salah2,
            'jawaban_salah3' => $request->jawaban_salah3
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
        $pertanyaan = pertanyaan::all()->where('pertanyaan_id', $id);
        return ['pertanyaan' => PertanyaanResource::collection($pertanyaan)];
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
        $pertanyaan = pertanyaan::findOrFail($id);
        $pertanyaan->update([
            'pertanyaan' => $request->pertanyaan,
            'jawaban_benar' => $request->jawaban_benar,
            'jawaban_salah1' => $request->jawaban_salah1,
            'jawaban_salah2' => $request->jawaban_salah2,
            'jawaban_salah3' => $request->jawaban_salah3
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
        $pertanyaan = pertanyaan::findOrFail($id);
        $pertanyaan->delete();
        return ['message' => 'data has been deleted'];
    }
}

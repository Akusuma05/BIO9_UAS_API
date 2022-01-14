<?php

namespace App\Http\Controllers;

use App\Models\pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function getPertanyaan($id)
    {
       $pertanyaan = pertanyaan::find($id);
       return response()->json($pertanyaan, 200);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaan = pertanyaan::all();

        $pertanyaanData['data'] = $pertanyaan;

        echo json_encode($pertanyaanData);
        exit;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'jawaban_salah3' => $request->jawaban_salah3,
        ]);
        return redirect('/menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $pertanyaan = pertanyaan::where('pertanyaan_id', $id);
        $pertanyaan->update([
            'pertanyaan' => $request->pertanyaan,
            'jawaban_benar' => $request->jawaban_benar,
            'jawaban_salah1' => $request->jawaban_salah1,
            'jawaban_salah2' => $request->jawaban_salah2,
            'jawaban_salah3' => $request->jawaban_salah3,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}

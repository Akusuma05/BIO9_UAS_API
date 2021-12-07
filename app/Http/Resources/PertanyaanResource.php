<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PertanyaanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'pertanyaan_id' => $this->pertanyaan_id,
            'pertanyaan' => $this->pertanyaan,
            'jawaban_benar' => $this->jawaban_benar,
            'jawaban_salah1' => $this->jawaban_salah1,
            'jawaban_salah2' => $this->jawaban_salah2,
            'jawaban_salah3' => $this->jawaban_salah3,
        ];
    }
}

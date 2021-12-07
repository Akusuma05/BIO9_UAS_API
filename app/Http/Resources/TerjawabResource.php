<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TerjawabResource extends JsonResource
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
            'terjawab_id' => $this->terjawab_id,
            'pertanyaan_id_terjawab' => $this->pertanyaan_id_terjawab,
            'student_gamedata_id_terjawab' => $this->student_gamedata_id_terjawab,
        ];
    }
}

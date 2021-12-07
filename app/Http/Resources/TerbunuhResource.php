<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TerbunuhResource extends JsonResource
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
            'terbunuh_id' => $this->terbunuh_id,
            'monster_id_terbunuh' => $this->monster_id_terbunuh,
            'student_gamedata_id_terbunuh' => $this->student_gamedata_id_terbunuh,
            'monster_base_health' => $this->monster_base_health,
            'monster_health_left' => $this->monster_health_left,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GamedataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'student_gamedata_id' => $this->student_gamedata_id,
            'student_id_gamedata' => $this->student_id_gamedata,
            'total_damage' => $this->total_damage,
            'health_left' => $this->health_left,
            'money' => $this->money,
            'time_left' => $this->time_left,
            'current_damage' => $this->current_damage
        ];
    }
}

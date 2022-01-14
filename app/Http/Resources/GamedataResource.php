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
            'gamedata_id' => $this->gamedata_id,
            'student_id' => $this->student_id,
            'total_damage' => $this->total_damage,
            'health_left' => $this->health_left,
            'money' => $this->money,
            'time_left' => $this->time_left,
            'current_damage' => $this->current_damage
        ];
    }
}

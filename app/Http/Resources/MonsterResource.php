<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MonsterResource extends JsonResource
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
            'monster_id' => $this->monster_id,
            'monster_name' => $this->monster_name,
            'monster_image_path_idle' => $this->monster_image_path_idle,
            'monster_image_path_attack' => $this->monster_image_path_attack,
            'monster_image_path_dead' => $this->monster_image_path_dead,
        ];
    }
}

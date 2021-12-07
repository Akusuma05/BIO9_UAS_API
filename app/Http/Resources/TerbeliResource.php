<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TerbeliResource extends JsonResource
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
            'terbeli_id' => $this->terbeli_id,
            'item_id_terbeli' => $this->item_id_terbeli,
            'student_gamedata_id_terbeli' => $this->student_gamedata_id_terbeli,
            'harga' => $this->harga,
        ];
    }
}

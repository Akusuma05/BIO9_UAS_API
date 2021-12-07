<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
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
            'item_id' => $this->item_id,
            'item_name' => $this->item_name,
            'base_harga' => $this->base_harga,
            'penambahan_damage' => $this->penambahan_damage,
        ];
    }
}

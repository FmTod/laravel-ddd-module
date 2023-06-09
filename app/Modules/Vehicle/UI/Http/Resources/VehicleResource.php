<?php

namespace App\Modules\Vehicle\UI\Http\Resources;

use App\Modules\Part\UI\Http\Resources\PartResource;
use Illuminate\Http\Resources\Json\JsonResource;

class VehicleResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'manufacturer' => $this->manufacturer,
            'year' => $this->year,
            'parts' => PartResource::collection($this->whenLoaded('parts')),
        ];
    }
}

<?php

namespace App\Modules\Part\UI\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePartRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'vehicle_id' => 'required|exists:vehicles,id',
        ];
    }
}

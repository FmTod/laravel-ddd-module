<?php

namespace App\Modules\Vehicle\UI\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string',
            'manufacturer' => 'string',
            'year' => 'numeric|min:1900|max:' . date('Y'),
        ];
    }
}

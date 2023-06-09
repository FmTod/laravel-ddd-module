<?php

namespace App\Modules\Vehicle\UI\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'manufacturer' => 'required|string',
            'year' => 'required|numeric|min:1900|max:' . date('Y'),
        ];
    }
}

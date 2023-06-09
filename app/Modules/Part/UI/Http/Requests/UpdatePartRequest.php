<?php

namespace App\Modules\Part\UI\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'string',
            'price' => 'numeric|min:0',
        ];
    }
}

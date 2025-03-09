<?php

namespace App\Http\Requests\Divisa;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'symbol' => 'required',
            'exchange_rate' => 'required|numeric'
        ];
    }
}

<?php

namespace App\Http\Requests\Divisa;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    protected function prepareForValidation(): void
    {
        $this->merge([
            'id' => $this->route('id')
        ]);
    }
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'id' => 'integer|exists:divisas',
            'name' => 'required',
            'symbol' => 'required',
            'exchange_rate' => 'required|numeric'
        ];
    }
}

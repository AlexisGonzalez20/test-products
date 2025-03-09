<?php

namespace App\Http\Requests\Producto;

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
            'id' => 'integer|exists:productos',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'currency_id' => 'required|integer|exists:divisas,id',
            'tax_cost' => 'required|numeric',
            'manufacturing_cost' => 'required|numeric'
        ];
    }
}

<?php

namespace App\Http\Requests\PrecioProducto;

use Illuminate\Foundation\Http\FormRequest;

class ShowRequest extends FormRequest
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
            'id' => 'integer|exists:precios_productos'
        ];
    }
}

<?php

namespace App\Http\Requests\Divisa;

use Illuminate\Foundation\Http\FormRequest;

class DestroyRequest extends FormRequest
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
            'id' => 'integer|exists:divisas'
        ];
    }
}

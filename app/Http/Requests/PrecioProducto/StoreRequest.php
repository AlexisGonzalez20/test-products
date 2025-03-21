<?php

namespace App\Http\Requests\PrecioProducto;

use App\Models\Divisa;
use App\Models\Producto;
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
            'product_id' => 'required|integer|exists:productos,id',
            'currency_id' => 'required|integer|exists:divisas,id'
        ];
    }

    protected function passedValidation(): void
    {
        $this->merge([
            'price' => $this->price($this->product_id,$this->currency_id),
        ]);
    }

    protected function price( $product_id, $currency_id): string
    {
        $producto = Producto::find($product_id);
        $divisa = Divisa::find($currency_id);
        return  $divisa->exchange_rate * $producto->price;
    }
}

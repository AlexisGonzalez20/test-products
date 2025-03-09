<?php

namespace App\Http\Services;

use App\Models\PrecioProducto;
use Illuminate\Http\Request;

class PrecioProductoServices implements IServices
{
    public static function Index()
    {
        return PrecioProducto::all();   
    }

    public static function store(Request $request)
    {
        PrecioProducto::create($request->only(['product_id','currency_id','price']));
    }

    public static function show(Request $request)
    {
        return PrecioProducto::find($request->id);
    }

    public static function update(Request $request)
    {
        $PrecioProducto = PrecioProducto::find($request->id);
        $PrecioProducto->update($request->only(['product_id','currency_id','price']));
    }

    public static function destroy(Request $request)
    {
        PrecioProducto::destroy($request->id);
    }

    public static function exists()
    {
        return PrecioProducto::exists();
    }
}

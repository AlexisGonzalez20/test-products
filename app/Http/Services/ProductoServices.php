<?php

namespace App\Http\Services;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoServices implements IServices
{
    public static function Index()
    {
        return Producto::all();   
    }

    public static function store(Request $request)
    {
        Producto::create($request->only(['name','description','price','currency_id','tax_cost','manufacturing_cost']));
    }

    public static function show(Request $request)
    {
        return Producto::find($request->id);
    }

    public static function update(Request $request)
    {
        $Producto = Producto::find($request->id);
        $Producto->update($request->only(['name','description','price','currency_id','tax_cost','manufacturing_cost']));
    }

    public static function destroy(Request $request)
    {
        Producto::destroy($request->id);
    }

    public static function exists()
    {
        return Producto::exists();
    }

    public static function ProductPrices(Request $request)
    {
        return Producto::find($request->id)->Prices;
    }

    public static function StoreProductPrices(Request $request)
    {
        PrecioProductoServices::store($request);
    }

    public static function ExistsProductPrices($request)
    {
        return Producto::find($request->id)->Prices()->exists();
    }
}

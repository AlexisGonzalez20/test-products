<?php

namespace App\Http\Controllers;

use App\Http\Requests\Producto\DestroyRequest;
use App\Http\Requests\Producto\ShowRequest;
use App\Http\Requests\Producto\StoreProductPricesRequest;
use App\Http\Requests\Producto\StoreRequest;
use App\Http\Requests\Producto\UpdateRequest;
use App\Http\Services\ProductoServices;

class ProductoController extends Controller
{
    public function index()
    {
        if(ProductoServices::exists()){
            return response()->json([
                    'data' => ProductoServices::Index(),
                    'msg' => 'Informacion encontrada'
                ],200);
        }else{
            return response()->json([
                    'msg' => 'Informacion no encontrada'
                ],404);
        }
    }

    public function store(StoreRequest $request)
    {
        ProductoServices::store($request);
        return response([
            'msg' => 'Cargado correctamente'
        ],200);
    }

    public function show(ShowRequest $request)
    {
        return response([
            'data' => ProductoServices::show($request),
            'msg' => 'Informacion encontrada'
        ],200);
    }

    public function update(UpdateRequest $request)
    {
        ProductoServices::update($request);
        return response([
            'msg' => 'Actualizado correctamente'
        ],200);
    }

    public function destroy(DestroyRequest $request)
    {
        ProductoServices::destroy($request);
        return response([
            'msg' => 'Eliminado correctamente'
        ],200);
    }

    public function ProductPrices(ShowRequest $request)
    {
        if(ProductoServices::ExistsProductPrices($request)){
            return response([
                'data' => ProductoServices::ProductPrices($request),
                'msg' => 'Informacion encontrada'
            ],200);
        }else{
            return response()->json([
                    'msg' => 'Informacion no encontrada'
                ],404);
        }
    }

    public function StoreProductPrices(StoreProductPricesRequest $request)
    {
        ProductoServices::StoreProductPrices($request);
        return response([
            'msg' => 'Cargado correctamente'
        ],200);
    }
}

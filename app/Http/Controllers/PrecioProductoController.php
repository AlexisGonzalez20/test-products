<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrecioProducto\DestroyRequest;
use App\Http\Requests\PrecioProducto\ShowRequest;
use App\Http\Requests\PrecioProducto\StoreRequest;
use App\Http\Requests\PrecioProducto\UpdateRequest;
use App\Http\Services\PrecioProductoServices;

class PrecioProductoController extends Controller
{
    public function index()
    {
        if(PrecioProductoServices::exists()){
            return response()->json([
                    'data' => PrecioProductoServices::Index(),
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
        PrecioProductoServices::store($request);
        return response([
            'msg' => 'Cargado correctamente'
        ],200);
    }

    public function show(ShowRequest $request)
    {
        return response([
            'data' => PrecioProductoServices::show($request),
            'msg' => 'Informacion encontrada'
        ],200);
    }

    public function update(UpdateRequest $request)
    {
        PrecioProductoServices::update($request);
        return response([
            'msg' => 'Actualizado correctamente'
        ],200);
    }

    public function destroy(DestroyRequest $request)
    {
        PrecioProductoServices::destroy($request);
        return response([
            'msg' => 'Eliminado correctamente'
        ],200);
    }
}

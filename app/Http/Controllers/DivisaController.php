<?php

namespace App\Http\Controllers;

use App\Http\Requests\Divisa\DestroyRequest;
use App\Http\Requests\Divisa\ShowRequest;
use App\Http\Requests\Divisa\StoreRequest;
use App\Http\Requests\Divisa\UpdateRequest;
use App\Http\Services\DivisaServices;

class DivisaController extends Controller
{
    public function index()
    {
        if(DivisaServices::exists()){
            return response()->json([
                    'data' => DivisaServices::Index(),
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
        DivisaServices::store($request);
        return response([
            'msg' => 'Cargado correctamente'
        ],200);
    }

    public function show(ShowRequest $request)
    {
        return response([
            'data' => DivisaServices::show($request),
            'msg' => 'Informacion encontrada'
        ],200);
    }

    public function update(UpdateRequest $request)
    {
        DivisaServices::update($request);
        return response([
            'msg' => 'Actualizado correctamente'
        ],200);
    }

    public function destroy(DestroyRequest $request)
    {
        DivisaServices::destroy($request);
        return response([
            'msg' => 'Eliminado correctamente'
        ],200);
    }
}

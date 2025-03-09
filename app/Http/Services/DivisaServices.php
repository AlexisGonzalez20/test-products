<?php

namespace App\Http\Services;

use App\Models\Divisa;
use Illuminate\Http\Request;

class DivisaServices implements IServices
{
    public static function Index()
    {
        return Divisa::all();   
    }

    public static function store(Request $request)
    {
        Divisa::create($request->only(['name','symbol','exchange_rate']));
    }

    public static function show(Request $request)
    {
        return Divisa::find($request->id);
    }

    public static function update(Request $request)
    {
        $Divisa = Divisa::find($request->id);
        $Divisa->update($request->only(['name','symbol','exchange_rate']));
    }

    public static function destroy(Request $request)
    {
        Divisa::destroy($request->id);
    }

    public static function exists()
    {
        return Divisa::exists();
    }
}

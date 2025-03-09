<?php

namespace App\Http\Services;

use Illuminate\Http\Request;

interface IServices
{
    public static function Index();

    public static function store(Request $request);

    public static function show(Request $request);

    public static function update(Request $request);

    public static function destroy(Request $request);

    public static function exists();
}

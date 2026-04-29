<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\LaporanJalan;
use Illuminate\Http\Request;

class LaporanJalanApiController extends Controller
{
    public function index()
    { 
        return response()->json(LaporanJalan::latest()->get()); 
    }

    public function store(Request $request)
    {
        $data = LaporanJalan::create($request->all());
        return response()->json($data, 201);
    }

    public function show(LaporanJalan $laporanJalan)
    { 
        return response()->json($laporanJalan); 
    }

    public function update(Request $request, LaporanJalan $laporanJalan)
    {
        $laporanJalan->update($request->all());
        return response()->json($laporanJalan);
    }

    public function destroy(LaporanJalan $laporanJalan)
    {
        $laporanJalan->delete();
        return response()->json(['message' => 'deleted']);
    }
}


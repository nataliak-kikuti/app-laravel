<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UcController extends Controller
{
    public function index()
    {
        $ucs = Uc::all();
        return response()->json($ucs);
    }

    public function store(Request $request)
    {
        $uc = Uc::create($request->all());
        return response()->json($uc, 201);
    }

    public function show($id)
    {
        $uc = Uc::findOrFail($id);
        return response()->json($uc);
    }

    public function update(Request $request, $id)
    {
        $uc = Uc::findOrFail($id);
        $uc->update($request->all());
        return response()->json($uc, 200);
    }

    public function destroy($id)
    {
        $uc = Uc::findOrFail($id);
        $uc->delete();
        return response()->json(null, 204);
    }
}
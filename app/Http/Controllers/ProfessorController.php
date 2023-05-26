<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function create(Request $request)
    {
        $professor = Professor::create($request->all());
        return response()->json($professor, 201);
    }

    public function list()
    {
        $professors = Professor::all();
        return response()->json($professors);
    }

    public function update(Request $request, $id)
    {
        $professor = Professor::findOrFail($id);
        $professor->update($request->all());
        return response()->json($professor, 200);
    }

    public function delete($id)
    {
        Professor::findOrFail($id)->delete();
        return response()->json(null, 204);
    }

    public function listAvailability($id)
    {
        $professor = Professor::findOrFail($id);
        $availability = $professor->availability;
        return response()->json($availability);
    }
}
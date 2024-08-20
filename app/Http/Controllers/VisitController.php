<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\VisitRequest;
use App\Models\VisitModel;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "visits" => VisitModel::all(),
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VisitRequest $request)
    {

        $visit = VisitModel::create($request->all());

        return response()->json([
            "visit" => $visit,
            "message" => "La visita ha sido registrada"
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $visit = VisitModel::findOrFail($id);
        return response()->json([
            "visit" => $visit,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VisitRequest $request, string $id)
    {
       
        $visit = VisitModel::findOrFail($id);

        $visit->update($request->all());

        return response()->json([
            "visit" => $visit,
            "message" => "La visita ha sido actualizada"
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $visit = VisitModel::findOrFail($id);

        $visit->delete();

        return response()->json([
            "message" => "La visita ha sido eliminada"
        ], 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Filters\DrugsFilter;
use App\Http\Controllers\Controller;
use App\Models\Drug;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDrugRequest;
use App\Http\Requests\UpdateDrugRequest;
use App\Http\Resources\DrugResource;
use App\Http\Resources\DrugCollection;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, DrugsFilter $filter)
    {
        $query = Drug::query();

        // Primeni filtere
        $query = $filter->apply($query, $request->all());

        // Paginacija
        $drugs = $query->paginate();
        return new DrugCollection($drugs);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDrugRequest $request)
    {
        $drug = Drug::create($request->all());
        return new DrugResource($drug);
    }

    /**
     * Display the specified resource.
     */
    public function show(Drug $drug)
    {
        return new DrugResource($drug);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDrugRequest $request, Drug $drug)
    {
        $drug->update($request->all());
        return new DrugResource($drug);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Drug $drug)
    {
        $drug->delete();
        return response()->json(['message' => 'Drug deleted successfully']);
    }
}
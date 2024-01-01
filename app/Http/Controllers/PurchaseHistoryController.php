<?php

namespace App\Http\Controllers;

use App\Http\Filters\PurchaseHistoriesFilter;
use App\Http\Controllers\Controller;
use App\Models\PurchaseHistory;
use Illuminate\Http\Request;
use App\Http\Requests\StorePurchaseHistoryRequest;
use App\Http\Requests\UpdatePurchaseHistoryRequest;
use App\Http\Resources\PurchaseHistoryResource;
use App\Http\Resources\PurchaseHistoryCollection;

class PurchaseHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $purchaseHistories = PurchaseHistory::with('customer')->paginate();
        return PurchaseHistoryResource::collection($purchaseHistories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePurchaseHistoryRequest $request)
    {
        $purchaseHistory = PurchaseHistory::create($request->all());
        return new PurchaseHistoryResource($purchaseHistory);
    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaseHistory $purchaseHistory)
    {
        return new PurchaseHistoryResource($purchaseHistory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePurchaseHistoryRequest $request, PurchaseHistory $purchaseHistory)
    {
        $purchaseHistory->update($request->all());
        return new PurchaseHistoryResource($purchaseHistory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaseHistory $purchaseHistory)
    {
        $purchaseHistory->delete();
        return response()->json(['message' => 'PurchaseHistory deleted successfully']);
    }
}
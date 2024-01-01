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
<<<<<<< HEAD
    public function index(Request $request)
    {
        $purchaseHistories = PurchaseHistory::with('customer')->paginate();
        return PurchaseHistoryResource::collection($purchaseHistories);
=======
    public function index(Request $request, PurchaseHistoriesFilter $filter)
    {
        $query = PurchaseHistory::query();

        // Apply filters
        $query = $filter->apply($query, $request->all());

        // Pagination
        $purchaseHistories = $query->with('customer', 'drug')->paginate();
        return new PurchaseHistoryCollection($purchaseHistories);
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
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
<<<<<<< HEAD
=======
        $purchaseHistory->load('customer', 'drug');
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 625c3835af76ed8cf1a1ca0b652452689a6c6a9d

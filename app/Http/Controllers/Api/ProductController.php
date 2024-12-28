<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $products = Product::orderBy('created_at', 'desc')->get();
            if ($products->isEmpty()) {
                return response()->json([
                    "status" => "fail",
                    'message' => 'No products found',
                ], 404);
            }
            return response()->json([
                'status' => "success",
                'message' => 'Products retrieved successfully',
                'data' => $products,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => "Something went wrong. Please try again later.",
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $product_id)
    {
        try {
            $product = Product::find($product_id);
            if (!$product) {
                return response()->json([
                    "status" => "fail",
                    'message' => 'Product not found',
                ], 404);
            }
            return response()->json([
                'status' => "success",
                'message' => 'Product retrieved successfully',
                'data' => $product,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => "Something went wrong. Please try again later.",
            ], 500);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\ClientReview;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        try {
            $reviews = ClientReview::orderBy('created_at', 'desc')->get();
            if ($reviews->isEmpty()) {
                return response()->json([
                    "status" => "fail",
                    'message' => 'No Reviews found',
                ], 404);
            }
            return response()->json([
                'status' => "success",
                'message' => 'Reviews retrieved successfully',
                'data' => $reviews,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => "error",
                'message' => "Something went wrong. Please try again later.",
            ], 500);
        }
    }

}

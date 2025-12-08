<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    /**
     * Display reviews in admin panel
     */
    public function index()
    {
        $reviews = Review::with('product')->latest()->paginate(15);
        return view('dashboard.admin.reviews.index', compact('reviews'));
    }

    /**
     * Store a newly created review (public)
     */
    public function store(Request $request, $productId)
    {
        $request->validate([
            'reviewer_name' => 'required|string|max:255',
            'reviewer_email' => 'nullable|email|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|min:10|max:1000',
        ]);

        // Check if product exists
        $product = Product::findOrFail($productId);

        // Create review
        Review::create([
            'product_id' => $productId,
            'user_id' => Auth::id(), // Null if guest
            'reviewer_name' => $request->reviewer_name,
            'reviewer_email' => $request->reviewer_email,
            'rating' => $request->rating,
            'review' => $request->review,
            'is_approved' => true, // Auto-approve
        ]);

        return redirect()->route('product.detail', $productId)
            ->with('success', 'Thank you! Your review has been submitted successfully.');
    }

    /**
     * Update review (admin only)
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'reviewer_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string|min:10|max:1000',
        ]);

        $review = Review::findOrFail($id);
        $review->update([
            'reviewer_name' => $request->reviewer_name,
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return redirect()->route('reviews.index')
            ->with('success', 'Review updated successfully.');
    }

    /**
     * Delete review (admin only)
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index')
            ->with('success', 'Review deleted successfully.');
    }
}

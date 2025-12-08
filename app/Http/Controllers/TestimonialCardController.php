<?php

namespace App\Http\Controllers;

use App\Models\TestimonialCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = TestimonialCard::all();
        return view('dashboard.admin.testimonial-cards.index', compact('cards'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = $file->store('testimonial_images', 'public');
            $data['image'] = $path;
        }

        // Set defaults
        $data['order'] = $data['order'] ?? 0;

        TestimonialCard::create($data);

        return redirect()->back()->with('success', 'Testimonial card added successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $card = TestimonialCard::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'testimonial' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer'
        ]);

        $data = $request->all();

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($card->image && Storage::disk('public')->exists($card->image)) {
                Storage::disk('public')->delete($card->image);
            }
            $file = $request->file('image');
            $path = $file->store('testimonial_images', 'public');
            $data['image'] = $path;
        }

        $card->update($data);

        return redirect()->back()->with('success', 'Testimonial card updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $card = TestimonialCard::findOrFail($id);

        // Delete image if exists
        if ($card->image && Storage::disk('public')->exists($card->image)) {
            Storage::disk('public')->delete($card->image);
        }

        $card->delete();

        return redirect()->back()->with('success', 'Testimonial card deleted successfully.');
    }
}

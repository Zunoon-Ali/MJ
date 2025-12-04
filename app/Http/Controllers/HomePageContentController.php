<?php

namespace App\Http\Controllers;

use App\Models\HomePageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomePageContentController extends Controller
{
    // Show Home Page Content
    public function index()
    {
        $home = HomePageContent::first(); // Assuming only one home page record
        return view('dashboard.admin.home.pages.index', compact('home'));
    }

    // Show Create Form
    public function create()
    {
        return view('pages.home.create');
    }

    // Store Home Page Content
    public function store(Request $request)
    {
        $data = $request->all();

        // Handle Image Uploads
        $imageFields = [
            'home_banner_middleCard_img',
            'home_banner_rightCard_img',
            'home_about_img',
            'home_store_card1_img',
            'home_store_card2_img',
            'home_tatto_left_card2_img',
            'home_tatto_right_card2_img',
            'home_testimonials_card_img'
        ];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $path = $file->store('home_images', 'public');
                $data[$field] = $path;
            }
        }

        // Handle multiple gallery images as JSON
        if ($request->hasFile('home_galleryimg')) {
            $galleryPaths = [];
            foreach ($request->file('home_galleryimg') as $img) {
                $galleryPaths[] = $img->store('home_images', 'public');
            }
            $data['home_galleryimg'] = json_encode($galleryPaths);
        }

        HomePageContent::create($data);

        return redirect()->route('home-content.index')->with('success', 'Home page created successfully.');
    }

    // Show Edit Form
    public function edit($id)
    {
        $home = HomePageContent::findOrFail($id);
        return view('pages.home.edit', compact('home'));
    }

    // Update Home Page Content
    public function update(Request $request, $id)
    {
        $home = HomePageContent::findOrFail($id);
        $data = $request->all();

        $imageFields = [
            'home_banner_middleCard_img',
            'home_banner_rightCard_img',
            'home_about_img',
            'home_store_card1_img',
            'home_store_card2_img',
            'home_tatto_left_card2_img',
            'home_tatto_right_card2_img',
            'home_testimonials_card_img'
        ];

        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                // Delete old image if exists
                if ($home->$field && Storage::disk('public')->exists($home->$field)) {
                    Storage::disk('public')->delete($home->$field);
                }
                $file = $request->file($field);
                $path = $file->store('home_images', 'public');
                $data[$field] = $path;
            } else {
                $data[$field] = $home->$field;
            }
        }


        $home->update($data);

        return redirect()->route('home-content.index')->with('success', 'Home page updated successfully.');
    }

    // Optional: Delete Home Page Content
    public function destroy($id)
    {
        $home = HomePageContent::findOrFail($id);

        // Delete images
        $imageFields = [
            'home_banner_middleCard_img',
            'home_banner_rightCard_img',
            'home_about_img',
            'home_store_card1_img',
            'home_store_card2_img',
            'home_tatto_left_card2_img',
            'home_tatto_right_card2_img',
            'home_testimonials_card_img'
        ];

        foreach ($imageFields as $field) {
            if ($home->$field && Storage::disk('public')->exists($home->$field)) {
                Storage::disk('public')->delete($home->$field);
            }
        }

        $home->delete();

        return redirect()->route('home-content.index')->with('success', 'Home page deleted successfully.');
    }
}

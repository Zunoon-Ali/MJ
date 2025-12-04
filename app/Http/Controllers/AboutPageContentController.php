<?php

namespace App\Http\Controllers;

use App\Models\AboutPageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutPageContentController extends Controller
{
    public function index()
    {
        $about = AboutPageContent::first();
        return view('dashboard.admin.about.pages.index', compact('about'));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        // Handle Image Upload
        if ($request->hasFile('about_img')) {
            $data['about_img'] = $request->file('about_img')->store('about_images', 'public');
        }

        AboutPageContent::create($data);
        return redirect()->route('about-content.index')->with('success', 'About page created successfully.');
    }

    public function update(Request $request, $id)
    {
        $about = AboutPageContent::findOrFail($id);
        $data = $request->all();

        // Handle Image Upload
        if ($request->hasFile('about_img')) {
            if ($about->about_img && Storage::disk('public')->exists($about->about_img)) {
                Storage::disk('public')->delete($about->about_img);
            }
            $data['about_img'] = $request->file('about_img')->store('about_images', 'public');
        } else {
            $data['about_img'] = $about->about_img;
        }

        $about->update($data);
        return redirect()->route('about-content.index')->with('success', 'About page updated successfully.');
    }

    public function destroy($id)
    {
        $about = AboutPageContent::findOrFail($id);

        if ($about->about_img && Storage::disk('public')->exists($about->about_img)) {
            Storage::disk('public')->delete($about->about_img);
        }

        $about->delete();
        return redirect()->route('about-content.index')->with('success', 'About page deleted successfully.');
    }
}

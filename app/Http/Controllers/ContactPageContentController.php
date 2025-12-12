<?php

namespace App\Http\Controllers;

use App\Models\ContactPageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactPageContentController extends Controller
{
    public function index()
    {
        $contact = ContactPageContent::first();
        return view('dashboard.admin.contact.pages.index', compact('contact'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'slider1_tagline' => 'nullable|string|max:255',
                'slider1_h2' => 'nullable|string|max:255',
                'slider1_p' => 'nullable|string',
                'slider2_tagline' => 'nullable|string|max:255',
                'slider2_h2' => 'nullable|string|max:255',
                'slider2_p' => 'nullable|string',
                'slider3_tagline' => 'nullable|string|max:255',
                'slider3_h2' => 'nullable|string|max:255',
                'slider3_p' => 'nullable|string',
                'contact_tagline' => 'nullable|string|max:255',
                'contact_h2' => 'nullable|string|max:255',
                'contact_p' => 'nullable|string',
                'contact_link' => 'nullable|string|max:255',
                'testi_h2' => 'nullable|string|max:255',
                'testi_p' => 'nullable|string',
            ]);

            ContactPageContent::create($validated);
            return redirect()->route('contact-content.index')->with('success', 'Contact page content created successfully.');
        } catch (\Exception $e) {
            Log::error('Error creating contact page content: ' . $e->getMessage());
            return redirect()->route('contact-content.index')->with('error', 'Failed to create content. Please try again.');
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'slider1_tagline' => 'nullable|string|max:255',
                'slider1_h2' => 'nullable|string|max:255',
                'slider1_p' => 'nullable|string',
                'slider2_tagline' => 'nullable|string|max:255',
                'slider2_h2' => 'nullable|string|max:255',
                'slider2_p' => 'nullable|string',
                'slider3_tagline' => 'nullable|string|max:255',
                'slider3_h2' => 'nullable|string|max:255',
                'slider3_p' => 'nullable|string',
                'contact_tagline' => 'nullable|string|max:255',
                'contact_h2' => 'nullable|string|max:255',
                'contact_p' => 'nullable|string',
                'contact_link' => 'nullable|string|max:255',
                'testi_h2' => 'nullable|string|max:255',
                'testi_p' => 'nullable|string',
            ]);

            $contact = ContactPageContent::findOrFail($id);
            $contact->update($validated);
            return redirect()->route('contact-content.index')->with('success', 'Contact page content updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating contact page content: ' . $e->getMessage());
            return redirect()->route('contact-content.index')->with('error', 'Failed to update content. Please try again.');
        }
    }

    public function destroy($id)
    {
        try {
            $contact = ContactPageContent::findOrFail($id);
            $contact->delete();
            return redirect()->route('contact-content.index')->with('success', 'Contact page content deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting contact page content: ' . $e->getMessage());
            return redirect()->route('contact-content.index')->with('error', 'Failed to delete content. Please try again.');
        }
    }
}

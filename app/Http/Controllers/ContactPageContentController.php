<?php

namespace App\Http\Controllers;

use App\Models\ContactPageContent;
use Illuminate\Http\Request;

class ContactPageContentController extends Controller
{
    public function index()
    {
        $contact = ContactPageContent::first();
        return view('dashboard.admin.contact.pages.index', compact('contact'));
    }

    public function store(Request $request)
    {
        ContactPageContent::create($request->all());
        return redirect()->route('contact-content.index')->with('success', 'Contact page created successfully.');
    }

    public function update(Request $request, $id)
    {
        $contact = ContactPageContent::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contact-content.index')->with('success', 'Contact page updated successfully.');
    }

    public function destroy($id)
    {
        $contact = ContactPageContent::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact-content.index')->with('success', 'Contact page deleted successfully.');
    }
}

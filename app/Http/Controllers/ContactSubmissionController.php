<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactSubmissionController extends Controller
{
    // Store contact form submission from public page
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        ContactSubmission::create($validated);

        return redirect()->back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }

    // Display all submissions in admin panel
    public function index()
    {
        $submissions = ContactSubmission::latest()->get();
        return view('dashboard.admin.contact-submissions.index', compact('submissions'));
    }

    // Update submission (e.g., change status)
    public function update(Request $request, ContactSubmission $submission)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,read,replied',
        ]);

        $submission->update($validated);
        return redirect()->route('contact-submissions.index')->with('success', 'Submission updated successfully.');
    }

    // Delete submission
    public function destroy($id)
    {
        try {
            $submission = ContactSubmission::findOrFail($id);
            $submission->delete();
            return redirect()->route('contact-submissions.index')->with('success', 'Submission deleted successfully.');
        } catch (\Exception $e) {
            \Log::error('Error deleting contact submission: ' . $e->getMessage());
            return redirect()->route('contact-submissions.index')->with('error', 'Failed to delete submission. Please try again.');
        }
    }
}

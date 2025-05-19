<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Notification logic for admin can be added here
        // For now, we use session flash message
        session()->flash('success', 'New contact message received.');

        return redirect()->route('admin.contact.index');
    }

    public function edit(Contact $contact)
    {
        return view('admin.contact.partials.edit-modal', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        $contact->update($validated);

        session()->flash('success', 'Contact message updated.');

        return redirect()->route('admin.contact.index');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        session()->flash('success', 'Contact message deleted.');

        return redirect()->route('admin.contact.index');
    }
}

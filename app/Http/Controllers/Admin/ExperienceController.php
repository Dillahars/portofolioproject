<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experience;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experiences = Experience::all();
        return view('admin.experience.index', compact('experiences'));
    }

    /**
     * Display a listing of experiences for public view.
     */
    public function publicIndex()
    {
        $experiences = Experience::all();
        return view('experience', compact('experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // This method may not be needed if using modal forms
        return view('admin.experience.partials.create-modal');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('experiences', 'public');
            $validated['image_url'] = 'storage/' . $imagePath;
        }

        Experience::create($validated);

        return redirect()->route('admin.experience.index')->with('success', 'Experience created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Optional: implement if needed
        return view('admin.experience.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experience.partials.edit-modal', compact('experience', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $experience = Experience::findOrFail($id);

        $validated = $request->validate([
            'company_name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('experiences', 'public');
            $validated['image_url'] = 'storage/' . $imagePath;
        }

        $experience->update($validated);

        return redirect()->route('admin.experience.index')->with('success', 'Experience updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();

        return redirect()->route('admin.experience.index')->with('success', 'Experience deleted successfully.');
    }
}

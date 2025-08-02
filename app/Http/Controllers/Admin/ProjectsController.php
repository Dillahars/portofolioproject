<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $projects = Project::all();
        return view('admin.projects.partials.create-modal', compact('projects'))->with('showCreateModal', true);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'gambar' => 'nullable|image|max:2048',
            'link_github' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('projects', $imageName, 'public');
            // Save relative path without Storage::url to store path correctly
            $validated['image_path'] = 'storage/' . $imagePath;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
            'gambar' => 'nullable|image|max:2048',
            'link_github' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($project->image_path) {
                $oldImagePath = str_replace('/storage/', '', $project->image_path);
                Storage::disk('public')->delete($oldImagePath);
            }
            $image = $request->file('gambar');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('projects', $imageName, 'public');
            $validated['image_path'] = Storage::url($imagePath);
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
    }

    public function destroy(Project $project)
    {
        if ($project->image_path) {
            $oldImagePath = str_replace('/storage/', '', $project->image_path);
            Storage::disk('public')->delete($oldImagePath);
        }
        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
    }
}
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Str;

// class ProjectsController extends Controller
// {
//     public function index()
//     {
//         $projects = Project::all();
//         return view('admin.projects.index', compact('projects'));
//     }

//     public function create()
//     {
//         $projects = Project::all();
//         return view('admin.projects.partials.create-modal', compact('projects'))->with('showCreateModal', true);
//     }

//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'nama' => 'required|string|max:255',
//             'deskripsi' => 'nullable|string',
//             'tanggal_mulai' => 'required|date',
//             'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
//             'gambar' => 'nullable|image|max:2048',
//         ]);

//         if ($request->hasFile('gambar')) {
//             $image = $request->file('gambar');
//             $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
//             $imagePath = $image->storeAs('projects', $imageName, 'public');
//             $validated['image_path'] = Storage::url($imagePath);
//         }

//         Project::create($validated);

//         return redirect()->route('admin.projects.index')->with('success', 'Project created successfully.');
//     }

//     public function update(Request $request, Project $project)
//     {
//         $validated = $request->validate([
//             'nama' => 'required|string|max:255',
//             'deskripsi' => 'nullable|string',
//             'tanggal_mulai' => 'required|date',
//             'tanggal_selesai' => 'nullable|date|after_or_equal:tanggal_mulai',
//             'gambar' => 'nullable|image|max:2048',
//         ]);

//         if ($request->hasFile('gambar')) {
//             // Delete old image if exists
//             if ($project->image_path) {
//                 $oldImagePath = str_replace('/storage/', '', $project->image_path);
//                 Storage::disk('public')->delete($oldImagePath);
//             }
//             $image = $request->file('gambar');
//             $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
//             $imagePath = $image->storeAs('projects', $imageName, 'public');
//             $validated['image_path'] = Storage::url($imagePath);
//         }

//         $project->update($validated);

//         return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully.');
//     }

//     public function destroy(Project $project)
//     {
//         if ($project->image_path) {
//             $oldImagePath = str_replace('/storage/', '', $project->image_path);
//             Storage::disk('public')->delete($oldImagePath);
//         }
//         $project->delete();

//         return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully.');
//     }
// }

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // 1. Liat Semua Project
    public function index()
    {
        $projects = Project::latest()->get();
        return view('admin.projects.index', compact('projects'));
    }

    // 2. Tampilan Form Tambah
    public function create()
    {
        return view('admin.projects.create');
    }

    // 3. Simpan Project Baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'link' => 'nullable|url',
            'tech_stack' => 'nullable|max:100', // Tambahan buat Tech Stack
            'image' => 'image|mimes:jpeg,png,jpg|max:2048', // Max 2MB
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Simpan gambar di folder storage/app/public/projects
            $imagePath = $request->file('image')->store('projects', 'public');
            $data['image'] = $imagePath;
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Project berhasil ditambah, anjeng!');
    }

    // 4. Form Edit
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    // 5. Update Project
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);
        
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'link' => 'nullable|url',
            'tech_stack' => 'nullable|max:100', // Tambahan buat Tech Stack
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Hapus gambar lama kalo ada
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('projects', 'public');
            $data['image'] = $imagePath;
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Project berhasil diupdate!');
    }

    // 6. Hapus Project
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project mampus dihapus!');
    }
}
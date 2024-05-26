<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.projects.index', ['projects' => Project::orderByDesc('id')->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate
        $val_data = $request->validate([
            'name' => 'required|max:50',
            'language' => 'nullable|max:20',
            'description' => 'nullable',
            'cover_image' => 'nullable|image|max:500'
        ]);

        $val_data['slug'] = Str::slug($request->name, '-');


        if ($request->has('cover_image')) {
            // add cover image
            $val_data['cover_image'] = Storage::put('uploads', $request->cover_image);
        }

        // dd($val_data);

        //create 
        Project::create($val_data);

        //redirect
        return to_route('admin.projects.index')->with('message', 'Project created with success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}

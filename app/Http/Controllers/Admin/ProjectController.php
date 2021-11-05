<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::latest()->get();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        if($request->has('image')){
            $image = $request->file('image')->store('projects', 'public');
            $image_url = config('app.url') . '/storage/' . $image;
        }
        Project::create([
            'name'=>$request->name,
            'source_link'=>$request->source_link,
            'live_link'=>$request->live_link,
            'image'=>$image_url,
            'details'=>$request->details
        ]);

        return redirect()->route('projects.index')->with('success','Project Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update([
            'name' => $request->name,
            'source_link' => $request->source_link,
            'live_link' => $request->live_link,
            'details' => $request->details
        ]);
        if ($request->has('image')) {
            $image = $request->file('image')->store('projects', 'public');
            $image_url = config('app.url') . '/storage/' . $image;
            $project->update([
                'image'=>$image_url
            ]);
        }
        return redirect()->back()->with('success','Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->back()->with('success','Project Deleted');
    }
}

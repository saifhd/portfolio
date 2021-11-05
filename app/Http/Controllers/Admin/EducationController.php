<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Education\CreateRequest;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations=Education::latest()->get();
        return view('admin.education.index',compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        Education::create([
            'course' => $request->course,
            'institute' => $request->institute,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return redirect()->route('education.index')->with('success', 'Education Data Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('admin.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request, Education $education)
    {
        $education->update([
            'course' => $request->course,
            'institute' => $request->institute,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date
        ]);
        return redirect()->back()->with('success','Education Details Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->back()->with('success','Education Detail Deleted');
    }
}

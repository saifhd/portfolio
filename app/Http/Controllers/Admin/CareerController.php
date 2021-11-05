<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Career\CreateRequest;
use App\Models\Career;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careers=Career::latest()->get();
        return view('admin.career.index',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        Career::create([
            'company_name'=>$request->company_name,
            'title'=>$request->title,
            'description'=>$request->description,
            'start_date'=>$request->start_date,
            'end_date' => $request->end_date
        ]);
        return redirect()->route('career.index')->with('success','Career Data Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('admin.career.edit',compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRequest $request, Career $career)
    {
        $career->update([
            'title'=>$request->title,
            'company_name'=>$request->company_name,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'description'=>$request->description
        ]);
        return redirect()->back()->with('success','Career Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->back()->with('success','Career Deleted');
    }
}

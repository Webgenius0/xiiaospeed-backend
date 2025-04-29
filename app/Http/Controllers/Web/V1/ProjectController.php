<?php

namespace App\Http\Controllers\Web\V1;

use App\Models\Project;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.layouts.project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.layouts.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            return redirect()->back()->with('t-success', 'Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        try {
            return view('backend.layouts.project.edit');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        try {

            return redirect()->back()->with('t-success', 'Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }

    /**
     * Summary of destroy
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project): RedirectResponse
    {
        try {
            $project->delete();
            return redirect()->back()->with('t-success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }
}

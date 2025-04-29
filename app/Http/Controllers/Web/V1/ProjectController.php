<?php

namespace App\Http\Controllers\Web\V1;

use App\Models\Project;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectController
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $projects = Project::all();
        $compact = ['projects' => $projects];
        return view('backend.layouts.project.index', $compact);
    }

    /**
     * Show the form for creating a new resource.
     * @return
     */
    public function create(): View
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
     * @param \App\Models\Project $project
     * @return RedirectResponse|View
     */
    public function edit(Project $project): RedirectResponse|View
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
    public function update(Request $request, Project $project): RedirectResponse
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

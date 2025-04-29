<?php

namespace App\Http\Controllers\Web\V1;

use App\Helpers\Helper;
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
            return view('backend.layouts.project.edit', compact('project'));
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return RedirectResponse
     */
    public function update(Request $request, Project $project): RedirectResponse
    {
        $validatedData = $request->validate([
            'title'       => 'required|string',
            'start'       => 'required|date',
            'end'         => 'nullable|date',
            'url'         => 'nullable|url',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:30720',
            'skills'      => 'required|string',
            'description' => 'required|string',
        ]);
        try {
            if (isset($validatedData['image'])) {
                Helper::deleteFile($project['image']);
                $image = Helper::uploadFile($validatedData['image'], 'project');
                $project->image = $image;
            }

            $project->title = $validatedData['title'];
            $project->start = $validatedData['start'];
            $project->end = $validatedData['end'];
            $project->url = $validatedData['url'];
            $project->skills = $validatedData['skills'];
            $project->description = $validatedData['description'];
            $project->save();

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

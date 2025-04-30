<?php

namespace App\Http\Controllers\Web\V1;

use App\Helpers\Helper;
use App\Models\Comment;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CommentController
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $projects = Comment::all();
        $compact = ['projects' => $projects];
        return view('backend.layouts.comment.index', $compact);
    }

    /**
     * Show the form for creating a new resource.
     * @return
     */
    public function create(): View
    {
        return view('backend.layouts.comment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'       => 'required|string',
            'start'       => 'required|date',
            'end'         => 'nullable|date',
            'url'         => 'nullable|url',
            'image'       => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:30720',
            'skills'      => 'required|string',
            'description' => 'required|string',
        ]);
        try {
            $image = null;
            if (isset($validatedData['image'])) {
                $image = Helper::uploadFile($validatedData['image'], 'comment');
            }
            Comment::create([
                'title'       => $validatedData['title'],
                'start'       => $validatedData['start'],
                'end'         => $validatedData['end'],
                'url'         => $validatedData['url'],
                'image'       => $image,
                'skills'      => $validatedData['skills'],
                'description' => $validatedData['description'],
            ]);
            return redirect()->route('v1.project.index')->with('t-success', 'Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }


    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Comment $comment
     * @return RedirectResponse|View
     */
    public function edit(Comment $comment): RedirectResponse|View
    {
        try {
            return view('backend.layouts.comment.edit', compact('comment'));
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
    public function update(Request $request, Comment $comment): RedirectResponse
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
                Helper::deleteFile($comment['image']);
                $image = Helper::uploadFile($validatedData['image'], 'project');
                $comment->image = $image;
            }

            $comment->title = $validatedData['title'];
            $comment->start = $validatedData['start'];
            $comment->end = $validatedData['end'];
            $comment->url = $validatedData['url'];
            $comment->skills = $validatedData['skills'];
            $comment->description = $validatedData['description'];
            $comment->save();

            return redirect()->back()->with('t-success', 'Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }

    /**
     * Summary of destroy
     * @param \App\Models\Comment $comment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Comment $comment): RedirectResponse
    {
        try {
            Helper::deleteFile($comment->image);
            $comment->delete();
            return redirect()->route('v1.project.index')->with('t-success', 'Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong');
        }
    }
}

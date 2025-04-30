<?php

namespace App\Http\Controllers\Web\V1;

use App\Helpers\Helper;
use App\Models\Comment;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CommentController
{
    /**
     * index
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $comments = Comment::all();
        $compact = ['comments' => $comments];
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
     * @param \Illuminate\Http\Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name'    => 'required|string',
            'title'   => 'required|string',
            'image'   => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:30720',
            'content' => 'required|string',
        ]);
        try {
            $image = null;
            if (isset($validatedData['image'])) {
                $image = Helper::uploadFile($validatedData['image'], 'comment');
            }
            Comment::create([
                'name'       => $validatedData['name'],
                'title'       => $validatedData['title'],
                'image'       => $image,
                'content' => $validatedData['content'],
            ]);
            return redirect()->route('v1.comment.index')->with('t-success', 'Created Successfully');
        } catch (Exception $e) {
            Log::error($e->getMessage());
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
            'name'    => 'required|string',
            'title'   => 'required|string',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:30720',
            'content' => 'required|string',
        ]);
        try {
            if (isset($validatedData['image'])) {
                Helper::deleteFile($comment['image']);
                $image = Helper::uploadFile($validatedData['image'], 'project');
                $comment->image = $image;
            }

            $comment->name = $validatedData['title'];
            $comment->title = $validatedData['title'];
            $comment->content = $validatedData['content'];
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

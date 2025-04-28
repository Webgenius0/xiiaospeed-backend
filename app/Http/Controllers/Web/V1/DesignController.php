<?php

namespace App\Http\Controllers\Web\V1;

use App\Models\Section;
use Exception;
use Illuminate\Http\Request;

class DesignController
{
    /**
     * show
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        $data = Section::find(2);
        return view('backend.layouts.design.edit', compact('data'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'nullable|string',
        ]);
        try {
            $about = Section::find(2);
            $about->description = $validatedData['content'];
            $about->save();
            return redirect()->back()->with('t-success', 'Content Saved');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong..!');
        }
    }
}

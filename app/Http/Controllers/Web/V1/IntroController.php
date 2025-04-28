<?php

namespace App\Http\Controllers\Web\V1;

use App\Models\Section;
use Exception;
use Illuminate\Http\Request;

class IntroController
{
    /**
     * show
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        $about = Section::select('description')->find(7);
        return view('backend.layouts.intro.edit', compact('about'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'content' => 'nullable|string',
        ]);
        try {
            $about = Section::find(7);
            $about->description = $validatedData['content'];
            $about->save();
            return redirect()->back()->with('t-success', 'Content Saved');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong..!');
        }
    }
}

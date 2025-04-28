<?php

namespace App\Http\Controllers\Web\V1;

use App\Helpers\Helper;
use App\Models\Section;
use Exception;
use Illuminate\Http\Request;

class BrandController
{
        /**
     * show
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        $data = Section::find(3);
        return view('backend.layouts.branding.edit', compact('data'));
    }

    /**
     * Summary of store
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'nullable|string',
            'sub_title' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:30720',
            'description' => 'nullable|string',
        ]);

        try {
            $data = Section::find(3);
            $image = null;
            if (isset($validatedData['image'])) {
                Helper::deleteFile($data['image']);
                $image = Helper::uploadFile($validatedData['image'], 'section/design');
            }
            $data->update([
                'title' => $validatedData['title'],
                'sub_title' => $validatedData['sub_title'],
                'image' => $image,
                'description' => $validatedData['description'],
            ]);

            return redirect()->back()->with('t-success', 'Content Saved');
        } catch (Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('t-error', 'Something went wrong..!');
        }
    }
}

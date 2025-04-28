<?php

namespace App\Http\Controllers\Web\V1;

use App\Helpers\Helper;
use App\Models\Section;
use Exception;
use Illuminate\Http\Request;

class SectionController
{
    /**
     * destroyImage
     * @param \App\Models\Section $section
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyImage(Section $section)
    {
        try {
            Helper::deleteFile($section->image);
            $section->image  = null;
            $section->save();
            return redirect()->back()->with('t-success', 'Deleted successfully');
        } catch (Exception $e) {
            return redirect()->back()->with('t-error', 'Something went wrong..!');
        }
    }
}

<?php

namespace App\Http\Controllers\Web\V1;

use App\Services\Web\V1\AboutService;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private AboutService $aboutService;

    /**
     * construct
     * @param \App\Services\Web\V1\AboutService $aboutService
     */
    public function __construct(AboutService $aboutService)
    {
        $this->aboutService = $aboutService;
    }

    /**
     * show
     * @return \Illuminate\Contracts\View\View
     */
    public function show()
    {
        return view('backend.layouts.about.edit');
    }
}

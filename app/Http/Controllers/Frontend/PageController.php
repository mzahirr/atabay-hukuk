<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Models\Backend\Page;

class PageController extends Controller
{
    /**
     * @param \App\Http\Models\Backend\Page $page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Page $page)
    {
        return view('frontend.page.show', compact('page'));
    }
}

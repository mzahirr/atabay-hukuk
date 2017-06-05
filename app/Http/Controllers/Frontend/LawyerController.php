<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Models\Backend\Attorney;

class LawyerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $lawyers = Attorney::with('getTranslation')->get();

        return view('frontend.attorney.list', compact('lawyers'));
    }
}

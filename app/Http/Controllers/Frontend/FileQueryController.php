<?php namespace App\Http\Controllers\Frontend;

use App\Http\Models\Backend\Trial;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\QueryCheck;

/**
 * Class FileQueryController
 * @package App\Http\Controllers\Frontend
 */
class FileQueryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function query()
    {
        return view('frontend.file.query');
    }

    public function check(QueryCheck $request)
    {
        $trials = Trial::with('attorneys', 'clients', 'status')->whereNumber($request->only('case_number'))->get();

        return back()->with(['trials' => $trials])->withNotify(trans('frontend.case_list'));
    }
}

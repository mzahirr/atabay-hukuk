<?php namespace App\Http\Controllers\Frontend;

use App\Http\Models\Backend\Client;
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

    /**
     * @param \App\Http\Requests\Frontend\QueryCheck $request
     *
     * @return mixed
     */
    public function check(QueryCheck $request)
    {
        $client = Client::whereIdentity($request->only('identity_number'))->firstOrFail();

        $trials = $client->trials;

        if (count($trials) > 0) {
            return back()->with(['trials' => $trials])->withNotify(trans('frontend.case_list'));
        }

        return back()->withErrors(trans('frontend.case_list_empty'));

    }
}

<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ContactAdd;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactController
 * @package App\Http\Controllers\Frontend
 */
class ContactController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.contact.show');
    }

    /**
     * @param \App\Http\Requests\Frontend\ContactAdd $request
     *
     * @return mixed
     */
    public function form(ContactAdd $request)
    {
        Mail::to(env('MAIL_TO_SYSTEM'))->send(new \App\Mail\ContactAdd($request->all()));

        return back()->withNotify(trans('frontend.mail_send'));
    }
}

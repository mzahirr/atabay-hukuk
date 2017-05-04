<?php namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;


/**
 * Class LocaleController
 * @package App\Http\Controllers\Frontend
 */
class LocaleController extends Controller
{

    /**
     * @param string $locale
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function setLocale($locale = 'tr')
    {
        if (! in_array($locale, ['en', 'tr'])) {
            $locale = 'tr';
        }

        session()->put('locale', $locale);

        return redirect(url(URL::previous()));
    }
}

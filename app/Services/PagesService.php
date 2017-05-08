<?php
/**
 * Created by PhpStorm.
 * User: halilcosdu
 * Date: 8.05.2017
 * Time: 16:11
 */

namespace App\Services;

use App\Http\Models\Backend\Page;

class PagesService
{
    /**
     * @return string
     */
    public function generate()
    {
        $pages = Page::with('getTranslation', 'subPages')->orderBy('order')->get();

        $view = view('frontend.services.page', compact('pages'))->render();

        return $view;

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: halilcosdu
 * Date: 7.05.2017
 * Time: 13:26
 */

namespace App\Http\ViewComposers;


use App\Http\Models\Backend\Link;
use Illuminate\View\View;

class LinkComposer
{
    /**
     * The user repository implementation.
     *
     * @var Link
     */
    protected $links;

    /**
     * Create a new profile composer.
     *
     * @param \App\Http\Models\Backend\Link $links
     *
     */
    public function __construct(Link $links)
    {
        $this->links = $links;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     *
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('links', $this->links->latest()->take(10)->get());
    }
}
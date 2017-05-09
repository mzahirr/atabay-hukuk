<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\PagesDataTable;
use App\Http\Models\Backend\Page;
use App\Http\Models\Backend\PageTranslation;
use App\Http\Requests\Backend\PageStore;
use App\Http\Requests\Backend\PageUpdate;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param PagesDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(PagesDataTable $dataTable)
    {
        return $dataTable->render('backend.page.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PageStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PageStore $request)
    {
        $page = Page::create(['is_active' => false]);

        $page->translations()->save(new PageTranslation([
            'title'  => $request->input('title'),
            'body'   => $request->input('body'),
            'locale' => 'tr',
        ]));
        $page->translations()->save(new PageTranslation([
            'title'  => $request->input('titleEN'),
            'body'   => $request->input('bodyEN'),
            'locale' => 'en',
        ]));

        return back()->withNotify('Sayfa Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Page $page
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('backend.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PageUpdate $request
     * @param Page $page
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PageUpdate $request, Page $page)
    {
        $page->getTranslation('tr')->first()->update([
            'title'  => $request->input('title'),
            'body'   => $request->input('body'),
            'locale' => 'tr',
        ]);

        $page->getTranslation('en')->first()->update([
            'title'  => $request->input('titleEN'),
            'body'   => $request->input('bodyEN'),
            'locale' => 'en',
        ]);

        return back()->withNotify('Sayfa Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Page $page
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();

        return back()->withNotify('Sayfa Silindi!');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order()
    {
        $items = Page::with('getTranslation')->orderBy('order')->get();
        $menu  = new Page;
        $menu  = $menu->getHTML($items);

        return view('backend.page.order', compact('menu'));
    }

    // AJAX Reordering function

    /**
     * @return string
     */
    public function reorder()
    {
        $source          = request('source');
        $destination     = request('destination', null);
        $item            = Page::find($source);
        $item->parent_id = $destination;
        $item->save();
        $ordering     = json_decode(request('order'));
        $rootOrdering = json_decode(request('rootOrder'));
        if ($ordering) {
            foreach ($ordering as $order => $item_id) {
                if ($itemToOrder = Page::find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        } else {
            foreach ($rootOrdering as $order => $item_id) {
                if ($itemToOrder = Page::find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        }

        return 'Düzenlenme başarılı';
    }
}

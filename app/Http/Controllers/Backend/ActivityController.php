<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ActivitiesDataTable;
use App\Http\Models\Backend\Activity;
use App\Http\Models\Backend\ActivityTranslation;
use App\Http\Requests\Backend\ActivityStore;
use App\Http\Requests\Backend\ActivityUpdate;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param ActivitiesDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(ActivitiesDataTable $dataTable)
    {
        return $dataTable->render('backend.activity.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.activity.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ActivityStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ActivityStore $request)
    {
        $activity = Activity::create(['is_active' => false]);
        $activity->translations()->save(new ActivityTranslation([
            'subject'     => $request->input('subject'),
            'description' => $request->input('description'),
            'locale'      => 'tr',
        ]));
        $activity->translations()->save(new ActivityTranslation([
            'subject'     => $request->input('subjectEN'),
            'description' => $request->input('descriptionEN'),
            'locale'      => 'en',
        ]));


        return back()->withNotify('Faaliyet Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Activity $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('backend.activity.edit', compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ActivityUpdate $request
     * @param Activity $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ActivityUpdate $request, Activity $activity)
    {

        $activity->getTranslation('tr')->first()->update([
            'subject'     => $request->input('subject'),
            'description' => $request->input('description'),
            'locale'      => 'tr',
        ]);

        $activity->getTranslation('en')->first()->update([
            'subject'     => $request->input('subjectEN'),
            'description' => $request->input('descriptionEN'),
            'locale'      => 'en',
        ]);


        return back()->withNotify('Faaliyet Güncellendi!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Activity $activity
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return back()->withNotify('Faaliyet Silindi!');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function order()
    {
        $items = Activity::with('getTranslation')->orderBy('order')->get();
        $menu  = new Activity;
        $menu  = $menu->getHTML($items);

        return view('backend.activity.order', compact('menu'));
    }

    // AJAX Reordering function

    /**
     * @return string
     */
    public function reorder()
    {
        $source          = request('source');
        $destination     = request('destination', null);
        $item            = Activity::find($source);
        $item->parent_id = $destination;
        $item->save();
        $ordering     = json_decode(request('order'));
        $rootOrdering = json_decode(request('rootOrder'));
        if ($ordering) {
            foreach ($ordering as $order => $item_id) {
                if ($itemToOrder = Activity::find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        } else {
            foreach ($rootOrdering as $order => $item_id) {
                if ($itemToOrder = Activity::find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        }

        return 'Düzenlenme başarılı';
    }
}

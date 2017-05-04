<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\AnnouncementsDataTable;
use App\Http\Models\Backend\Announcement;
use App\Http\Models\Backend\AnnouncementTranslation;
use App\Http\Requests\Backend\AnnouncementStore;
use App\Http\Requests\Backend\AnnouncementUpdate;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param AnnouncementsDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(AnnouncementsDataTable $dataTable)
    {
        return $dataTable->render('backend.announcement.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.announcement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AnnouncementStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AnnouncementStore $request)
    {

        $announcement = Announcement::create(['is_active' => false]);

        $announcement->translations()->save(new AnnouncementTranslation([
            'announcement' => $request->input('announcement'),
            'locale'       => 'tr',
        ]));
        if ($request->has('announcementEN')) {
            $announcement->translations()->save(new AnnouncementTranslation([
                'announcement' => $request->input('announcementEN'),
                'locale'       => 'en',
            ]));
        }

        return back()->withNotify('Duyuru Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Announcement $announcement
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        return view('backend.announcement.edit', compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AnnouncementUpdate $request
     * @param Announcement $announcement
     *
     * @return \Illuminate\Http\Response
     */
    public function update(AnnouncementUpdate $request, Announcement $announcement)
    {

        $announcement->getTranslation('tr')->first()->update([
            'announcement' => $request->input('announcement'),
            'locale'       => 'tr',
        ]);

        if ($request->has('announcementEN')) {
            $announcement->getTranslation('en')->first()->update([
                'announcement' => $request->input('announcementEN'),
                'locale'       => 'en',
            ]);
        }

        return back()->withNotify('Duyuru Güncellendi!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Announcement $announcement
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();

        return back()->withNotify('Duyuru Silindi!');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\AttorneysDataTable;
use App\Http\Models\Backend\Attorney;
use App\Http\Models\Backend\AttorneyTranslation;
use App\Http\Requests\Backend\AttorneyStore;
use App\Http\Requests\Backend\AttorneyUpdate;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AttorneyController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param AttorneysDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(AttorneysDataTable $dataTable)
    {
        return $dataTable->render('backend.attorney.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.attorney.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AttorneyStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AttorneyStore $request)
    {
        $attorney = Attorney::create($request->only('name', 'email', 'number'));

        $attorney->translations()->save(new AttorneyTranslation([
            'description' => $request->input('description'),
            'locale'      => 'tr',
        ]));
        $attorney->translations()->save(new AttorneyTranslation([
            'description' => $request->input('descriptionEN'),
            'locale'      => 'en',
        ]));


        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $img      = Image::make($request->file('image'))->fit(200, 200)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $attorney->image = $filename;
                $attorney->save();
            }
        }

        return back()->withNotify('Avukat Oluşturuldu! ');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Attorney $attorney
     *
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit(Attorney $attorney)
    {
        return view('backend.attorney.edit', compact('attorney'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AttorneyUpdate $request
     * @param Attorney $attorney
     *
     * @return \Illuminate\Http\Response
     */
    public function update(AttorneyUpdate $request, Attorney $attorney)
    {
        $attorney->update($request->only('name', 'email', 'number'));

        $attorney->getTranslation('tr')->first()->update([
            'description' => $request->input('description'),
            'locale'      => 'tr',
        ]);

        $attorney->getTranslation('en')->first()->update([
            'description' => $request->input('descriptionEN'),
            'locale'      => 'en',
        ]);


        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                Storage::delete('public/' . $attorney->image);
                $img      = Image::make($request->file('image'))->fit(200, 200)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $attorney->image = $filename;
                $attorney->save();
            }
        }

        return back()->withNotify('Avukat Güncellendi! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Attorney $attorney
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attorney $attorney)
    {
        Storage::delete('public/' . $attorney->image);
        $attorney->delete();

        return back()->withNotify('Avukat Silindi! ');
    }
}

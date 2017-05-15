<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\LinksDataTable;
use App\DataTables\Backend\PartnersDataTable;
use App\Http\Models\Backend\Link;
use App\Http\Models\Backend\Partner;
use App\Http\Requests\Backend\LinkStore;
use App\Http\Requests\Backend\LinkUpdate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\PartnerStore;
use App\Http\Requests\Backend\PartnerUpdate;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param PartnersDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(PartnersDataTable $dataTable)
    {
        return $dataTable->render('backend.partner.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param PartnerStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerStore $request)
    {
        $partner = Partner::create($request->only('name'));

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $img      = Image::make($request->file('image'))->fit(200)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $partner->image = $filename;
                $partner->save();
            }
        }

        return back()->withNotify('Referans Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PartnerUpdate $request
     * @param Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerUpdate $request, Partner $partner)
    {
        $partner->update($request->only('name'));

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                Storage::delete('public/' . $partner->image);
                $img      = Image::make($request->file('image'))->fit(200)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $partner->image = $filename;
                $partner->save();
            }
        }

        return back()->withNotify('Referans Güncellendi! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Partner $partner
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        Storage::delete('public/' . $partner->image);
        $partner->delete();

        return back()->withNotify('Referans Silindi! ');
    }
}

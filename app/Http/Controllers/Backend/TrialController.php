<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\TrialsDataTable;
use App\Http\Models\Backend\Attorney;
use App\Http\Models\Backend\Client;
use App\Http\Models\Backend\Status;
use App\Http\Models\Backend\Trial;
use App\Http\Requests\Backend\TrialStore;
use App\Http\Requests\Backend\TrialUpdate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrialController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param TrialsDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(TrialsDataTable $dataTable)
    {
        return $dataTable->render('backend.trial.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.trial.create');
    }

    /**
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Trial $trial)
    {
        $trial->load(['clients', 'attorneys']);

        return view('backend.trial.show', compact('trial'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param TrialStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(TrialStore $request)
    {
        Trial::create($request->only('number', 'court', 'subject', 'description'));

        return back()->withNotify('Dava Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Trial $trial
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Trial $trial)
    {
        return view('backend.trial.edit', compact('trial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TrialUpdate $request
     * @param Trial $trial
     *
     * @return \Illuminate\Http\Response
     */
    public function update(TrialUpdate $request, Trial $trial)
    {
        $trial->update($request->only('number', 'court', 'subject', 'description'));

        return back()->withNotify('Dava Güncellendi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Trial $trial
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trial $trial)
    {
        $trial->delete();

        return back()->withNotify('Dava Silindi!');
    }


    /**
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function status(Trial $trial)
    {
        $statuses = Status::all();

        return view('backend.trial.status', compact('trial', 'statuses'));

    }


    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return mixed
     */
    public function statusStore(Request $request, Trial $trial)
    {
        if ($request->has('status')) {
            $status = Status::findOrFail($request->input('status'));
            $trial->status()->associate($status);
            $trial->save();

            return back()->withNotify('Dosya durumu güncellendi!');
        }
        $trial->status_id = null;
        $trial->save();

        return back()->withNotify('Dosya durumu güncellendi!');

    }

    /**
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function attorney(Trial $trial)
    {
        $attorneys = Attorney::with('trials')->get();

        return view('backend.trial.attorney', compact('trial', 'attorneys'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return mixed
     */
    public function attorneyStore(Request $request, Trial $trial)
    {
        $trial->attorneys()->sync($request->input('attorneys', []));

        return back()->withNotify('Avukat ataması güncellendi!');

    }

    /**
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function client(Trial $trial)
    {
        $clients = Client::with('trials')->get();

        return view('backend.trial.client', compact('trial', 'clients'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Http\Models\Backend\Trial $trial
     *
     * @return mixed
     */
    public function clientStore(Request $request, Trial $trial)
    {
        $trial->clients()->sync($request->input('clients', []));

        return back()->withNotify('Müvekkil ataması güncellendi!');

    }
}

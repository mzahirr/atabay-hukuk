<?php namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\SliderDataTable;
use App\Http\Models\Backend\Article;
use App\Http\Controllers\Controller;
use App\Http\Models\Backend\Slider;
use App\Http\Models\Backend\SliderTranslation;
use App\Http\Requests\Backend\ArticleUpdate;
use App\Http\Requests\Backend\SliderStore;
use App\Http\Requests\Backend\SliderUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param SliderDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(SliderDataTable $dataTable)
    {
        return $dataTable->render('backend.slider.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param SliderStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(SliderStore $request)
    {
        if (empty($lastSlider = Slider::latest()->first())){
            $order = 0;
        } else {
            $order = $lastSlider->order;
        }

        /** @var Slider $slider */
        $slider = Slider::create(['is_active' => true, 'order' => $order + 1]);
        $slider->translations()->save(new SliderTranslation([
            'title' => $request->input('titleTR'),
            'locale' => 'tr',
        ]));
        $slider->translations()->save(new SliderTranslation([
            'title' => $request->input('titleEN'),
            'locale' => 'en',
        ]));

        if ($request->hasFile('img_source')) {
            if ($request->file('img_source')->isValid()) {
                $img = Image::make($request->file('img_source'))->fit(1920, 940)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $slider->img_source = $filename;
                $slider->save();
            }
        }

        return back()->withNotify('Slider Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Slider $slider
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('backend.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SliderUpdate $request
     * @param Slider $slider
     *
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdate $request, Slider $slider)
    {
        $slider->getTranslation('tr')->first()->update([
            'title' => $request->input('titleTR'),
            'locale' => 'tr',
        ]);

        $slider->getTranslation('en')->first()->update([
            'title' => $request->input('titleEN'),
            'locale' => 'en',
        ]);

        if ($request->hasFile('img_source')) {
            if ($request->file('img_source')->isValid()) {
                Storage::delete('public/' . $slider->img_source);
                $img = Image::make($request->file('img_source'))->fit(1920, 940)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $slider->img_source = $filename;
                $slider->save();
            }
        }

        return back()->withNotify('Slider Güncellendi!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Slider $slider
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        Storage::delete('public/' . $slider->img_source);
        $slider->delete();

        return back()->withNotify('Slider Silindi!');
    }

    public function order()
    {
        $items = Slider::with('getTranslation')->orderBy('order')->get();
        $menu  = new Slider;
        $menu  = $menu->getHTML($items);

        return view('backend.slider.order', compact('menu'));
    }

    public function reorder()
    {
        $source          = request('source');
        $item            = Slider::find($source);
        $item->save();
        $ordering     = json_decode(request('order'));
        $rootOrdering = json_decode(request('rootOrder'));
        if ($ordering) {
            foreach ($ordering as $order => $item_id) {
                if ($itemToOrder = Slider::find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        } else {
            foreach ($rootOrdering as $order => $item_id) {
                if ($itemToOrder = Slider::find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        }

        return 'Düzenlenme başarılı';
    }
}

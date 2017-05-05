<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\Backend\ArticlesDataTable;
use App\Http\Models\Backend\Article;
use App\Http\Models\Backend\ArticleTranslation;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ArticleStore;
use App\Http\Requests\Backend\ArticleUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ArticleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param ArticlesDataTable $dataTable
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function index(ArticlesDataTable $dataTable)
    {
        return $dataTable->render('backend.article.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleStore $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStore $request)
    {
        $article = Article::create(['is_active' => false, 'user_id' => Auth::id()]);
        $article->translations()->save(new ArticleTranslation([
            'subject'     => $request->input('subject'),
            'description' => $request->input('description'),
            'locale'      => 'tr',
        ]));
        $article->translations()->save(new ArticleTranslation([
            'subject'     => $request->input('subjectEN'),
            'description' => $request->input('descriptionEN'),
            'locale'      => 'en',
        ]));

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $img      = Image::make($request->file('image'))->fit(370, 188)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $article->image = $filename;
                $article->save();
            }
        }


        return back()->withNotify('Makale Oluşturuldu!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('backend.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleUpdate $request
     * @param Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleUpdate $request, Article $article)
    {
        $article->update([
            'user_id' => Auth::id(),
        ]);

        $article->getTranslation('tr')->first()->update([
            'subject'     => $request->input('subject'),
            'description' => $request->input('description'),
            'locale'      => 'tr',
        ]);

        $article->getTranslation('en')->first()->update([
            'subject'     => $request->input('subjectEN'),
            'description' => $request->input('descriptionEN'),
            'locale'      => 'en',
        ]);

        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                Storage::delete('public/' . $article->image);
                $img      = Image::make($request->file('image'))->fit(370, 188)->encode('jpg');
                $filename = 'images/' . time() . '.jpg';
                Storage::put('public/' . $filename . '', $img->__toString());
                $article->image = $filename;
                $article->save();
            }
        }


        return back()->withNotify('Makale Güncellendi!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete('public/' . $article->image);
        $article->delete();

        return back()->withNotify('Makale Silindi!');
    }
}

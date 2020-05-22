<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\News;

class NewsController extends Controller
{

    public function index()
    {
        $news= News::all();
        return view('News.index',compact('news'));
    }

    public function create()
    {
        return view('News.create');
    }

    public function store(NewsRequest $request)
    {
        News::create(['contenu'=>$request['contenu'],'statut'=>$request['statut']]);

        $news= News::all();
        return redirect(route("news.index", ['news'=>$news]));
    }

    public function show($id)
    {
        $new = News::findOrFail($id);
        return view('news.show', compact('new'));
    }


    public function edit($id)
    {
        $new = News::findOrFail($id);
        return view('News.update', compact('new'));
    }

    public function update(NewsRequest $request, $id)
    {
        $new = News::findOrFail($id);
        $new->update(['contenu'=>$request['contenu'],'statut'=>$request['statut']]);

        return redirect(route('news.show', $new));
    }

    public function destroy($id)
    {
        News::destroy($id);

        $news= News::all();
        return redirect(route("news.index", ['news'=>$news]));
    }
}

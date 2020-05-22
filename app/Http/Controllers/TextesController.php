<?php

namespace App\Http\Controllers;


use App\Http\Requests\TextesRequest;
use App\Textes;

class TextesController extends Controller
{

    public function index()
    {
        $textes = Textes::all();
        return view('textes.index',compact('textes'));
    }

    public function create()
    {
        return view('textes.create');
    }

    public function store(TextesRequest $request)
    {
        Textes::create(['titre'=>$request['titre'],'contenu'=>$request['contenu']]);

        $textes= Textes::all();
        return redirect(route("textes.index", ['textes'=>$textes]));
    }

    public function show($id)
    {
        $texte = Textes::findOrFail($id);
        return view('textes.show', compact('texte'));
    }

    public function edit($id)
    {
        $texte = Textes::findOrFail($id);
        return view('textes.update', compact('texte'));
    }

    public function update(TextesRequest $request, $id)
    {
        $texte = Textes::findOrFail($id);
        $texte->update(['titre'=>$request['titre'],'contenu'=>$request['contenu']]);

        return redirect(route('textes.show', $texte));
    }

    public function destroy($id)
    {
        Textes::destroy($id);

        $textes= Textes::all();
        return redirect(route("textes.index", ['textes'=>$textes]));
    }
}

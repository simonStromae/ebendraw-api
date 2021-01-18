<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('ui.tags.list-tags')->with('tags', Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('ui.tags.add-tag');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('ui.tags.edit-tag')->with('tag', Tag::findOrFail($id));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);

        if(count($tag->illustrations) === 0) {
            $tag->delete();
            notify()->success('Ce mot clé a bien été supprimé', 'Suppression tag');
        }else{
            notify()->error('Désolé ! Mais il est impossible d\'exécuter cette suppression car le mot clé que vous essayez de supprimer a été assigné à des illustrations', 'Erreur suppression');
        }

        return redirect()->route('tags.index');
    }
}

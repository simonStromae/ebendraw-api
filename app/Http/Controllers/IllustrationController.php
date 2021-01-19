<?php

namespace App\Http\Controllers;

use App\Illustration;
use App\Tag;
use Illuminate\Http\Request;

class IllustrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('ui.illustrations.list-illustrations')->with('illustrations', Illustration::paginate(6));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        if (Tag::count() === 0){
            notify()->error('Désolé ! Mais il est impossible de créer une illustration car aucun mot clé n\'a été ajouté', 'Erreur enregistrement');
            return redirect()->route('illustrations.index');
        }
        return view('ui.illustrations.add-illustration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $illustration = Illustration::findOrFail($id);
        $tags = $illustration->tags;
        return view('ui.illustrations.show-illustration', compact('illustration', 'tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('ui.illustrations.edit-illustration')->with('illustration', Illustration::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $illustration = Illustration::findOrFail($id);
        $illustration->tags()->detach($illustration->id);
        $illustration->delete();
        notify()->success('Cette illustration a bien été supprimé', 'Suppression illustration');

        return redirect()->route('illustrations.index');
    }
}

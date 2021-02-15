<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('ui.users.list-users')->with('users', User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        if (Role::count() === 0){
            notify()->error('Désolé ! Mais il est impossible d\'ajouter un utilisateur car rôle inexistant', 'Erreur enregistrement');
            return redirect()->route('users.index');
        }
        return view('ui.users.add-user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        return view('ui.users.show-user')->with('user', User::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('ui.users.edit-user')->with('user', User::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if(count($user->illustrations) === 0) {
            $user->delete();
            notify()->success('Cet utilisateur a bien été supprimé', 'Suppression utilisateur');
        }else{
            notify()->error('Désolé ! Mais il est impossible d\'exécuter cette suppression car l\'utilisateur que vous essayez de supprimer est dispose de plusieurs illustrations dans le système', 'Erreur suppression');
        }

        return redirect()->route('users.index');
    }
}

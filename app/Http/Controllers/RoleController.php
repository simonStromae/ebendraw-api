<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('ui.roles.list-roles')->with('roles', Role::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('ui.roles.add-role');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        return view('ui.roles.edit-role')->with('role', Role::findOrFail($id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);

        if(count($role->users) === 0) {
            $role->delete();
            notify()->success('Ce rôle a bien été supprimé', 'Suppression rôle');
        }else{
            notify()->error('Désolé ! Mais il est impossible d\'exécuter cette suppression car le rôle que vous essayez de supprimer est utilisé par des utilisateurs du système', 'Erreur suppression');
        }

        return redirect()->route('roles.index');
    }
}

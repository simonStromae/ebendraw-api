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
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

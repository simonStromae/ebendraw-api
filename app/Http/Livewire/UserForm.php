<?php

namespace App\Http\Livewire;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserForm extends Component
{
    public $id_user;
    public $name, $username, $email, $role, $password, $password_confirmation;
    public $roles;
    public $show = false, $created = true;
    public $action = "Ajouter";

    public function mount($user=null)
    {
        $this->roles = Role::all();

        if (!is_null($user)) {
            $this->name = $user->name;
            $this->username = $user->username;
            $this->email = $user->email;
            $this->role = $user->role->id;
            $this->id_user = $user->id;

            $this->action = "Modifier";
            $this->created = false;
        }else{
            $this->role = Role::first()->id;
        }
    }

    public function generate_password(){
        $this->password = $this->password_confirmation = generatePassword();
    }

    public function see_password(){
        if ($this->show === false){
            $this->show = true;
        }else{
            $this->show = false;
        }
    }

    public function submitForm(){
        $this->validate([
            'name' => ['required', 'string', 'min:3'],
            'role' => ['required', 'numeric'],
        ]);

        if(is_null($this->id_user)) {
            $this->validate([
                'username' => ['required', 'string', 'min:3', 'unique:users'],
                'email' => ['required', 'string', 'min:3', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed']
            ]);

            $user = new User();
        }else{
            $this->validate([
                'username' => ['required', 'string', 'min:3'],
                'email' => ['required', 'string', 'min:3']
            ]);

            $user = User::find($this->id_user);
        }

        $user->name = $this->name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->role_id = $this->role;
        $user->save();

        notify()->success('Cet utilisateur a bien été enregistré', 'Utilisateurs');

        return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.user-form');
    }
}

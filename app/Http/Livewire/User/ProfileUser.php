<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class ProfileUser extends Component
{
    public $name, $username, $email, $password, $password_confirmation;

    public function mount(){
        $user = Auth::user();
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
    }

    public function update_profile(){
        $this->validate([
            'name' => ['required', 'string', 'min:3'],
            'username' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'min:3'],
        ]);

        if (!empty($this->password)){
            $this->validate([
                'password' => ['required', 'string', 'min:6', 'confirmed']
            ]);
        }

        $user = Auth::user();

        $user->name = $this->name;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);

        $user->save();

        notify()->success('Mise a jour des informations de profil avec succès', 'Mofidication profil');
        redirect()->route('my_profile');
    }

    public function render()
    {
        return view('livewire.user.profile-user');
    }
}

<?php

namespace App\Http\Livewire;

use App\Role;
use Livewire\Component;

class UserForm extends Component
{
    public $roles;
    public $action = "Ajouter";

    public function mount()
    {
        $this->roles = Role::all();
    }
    public function render()
    {
        return view('livewire.user-form');
    }
}

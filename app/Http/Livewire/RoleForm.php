<?php

namespace App\Http\Livewire;

use App\Role;
use Livewire\Component;

class RoleForm extends Component
{
    public $name;
    public $description;
    public $id_role = null;

    public $action = "Ajouter";

    public function mount($role=null){
        if (!is_null($role)){
            $this->id_role = $role->id;
            $this->name = $role->name;
            $this->description = $role->description;

            $this->action = "Modifier";
        }
    }

    public function submitForm(){
        $this->validate([
            'name' => ['required', 'min:3', 'string']
        ]);

        if(is_null($this->id_role)){
            $role = new Role();
        }else{
            $role = Role::find($this->id_role);
        }

        $role->name = $this->name;
        $role->description = $this->description;
        $role->save();

        notify()->success('Ce rôle a bien été enregistré', 'Rôle');

        return redirect()->route('roles.index');

    }

    public function render()
    {
        return view('livewire.role-form');
    }
}

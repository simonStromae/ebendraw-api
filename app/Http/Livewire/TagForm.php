<?php

namespace App\Http\Livewire;

use App\Tag;
use Livewire\Component;

class TagForm extends Component
{
    public $name;
    public $id_tag;

    public $action = "Ajouter";

    public function mount($tag=null)
    {
        if (!is_null($tag)){
            $this->id_tag = $tag->id;
            $this->name = $tag->name;

            $this->action = "Modifier";
        }
    }

    public function submitForm(){
        $this->validate([
            'name' => ['required', 'min:3', 'string']
        ]);

        if(is_null($this->id_tag)){
            $tag = new Tag();
        }else{
            $tag = Tag::find($this->id_tag);
        }

        $tag->name = $this->name;
        $tag->save();

        notify()->success('Ce mot clé a bien été enregistré', 'Tag');

        return redirect()->route('tags.index');

    }

    public function render()
    {
        return view('livewire.tag-form');
    }
}

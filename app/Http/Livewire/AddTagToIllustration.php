<?php

namespace App\Http\Livewire;

use App\Tag;
use Livewire\Component;

class AddTagToIllustration extends Component
{
    public $new_tag;
    public $tags;
    public $illustration;

    public function mount($illustration){
        $this->tags = Tag::all();
        $this->illustration = $illustration;

    }

    public function updated($new_tag, $value){
        //dd($value);
        $this->illustration->tags()->syncWithoutDetaching($value);
    }

    public function render()
    {
        return view('livewire.add-tag-to-illustration');
    }
}

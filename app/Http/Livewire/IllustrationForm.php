<?php

namespace App\Http\Livewire;

use App\Illustration;
use App\Services\IllustrationService;
use App\Tag;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class IllustrationForm extends Component
{
    use WithFileUploads;

    public $id_illustration, $name, $description, $svg, $tags;
    public $tag_array;
    public $action="Ajouter";

    public function mount($illustration=null){
        $this->tag_array = Tag::all();

        if (!is_null($illustration)){
            $this->id_illustration = $illustration->id;
            $this->name = $illustration->name;
            $this->description = $illustration->description;
            $this->action = "Modifier";
        }
    }

    public function submitForm()
    {
        //dd();

        if (is_null($this->id_illustration)){
            $this->validate([
                'name' => 'required|string|min:3|unique:illustrations',
                'description' => 'required|string|min:3',
                'tags' => 'required',
                'svg' => 'required',
            ]);

            $illustration = new Illustration();
        }else{
            $this->validate([
                'name' => 'required|string|min:3',
                'description' => 'required|string|min:3',
                'tags' => 'required',
            ]);

            $illustration = Illustration::find($this->id_illustration);
        }

        $illustration->name = $this->name;
        $illustration->description = $this->description;
        $illustration->user_id = Auth::id();

        $illustration->tags()->syncWithoutDetaching($this->tags);

        if (!is_null($this->svg))
            $illustration->svg = saveSvg($this->svg, $this->name);

        $illustration->save();

        notify()->success('Cette illustration a bien été enregistré', 'Illustrations');

        return redirect()->route('illustrations.index');
    }

    public function render()
    {
        return view('livewire.illustration-form');
    }
}

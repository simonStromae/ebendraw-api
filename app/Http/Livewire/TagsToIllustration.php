<?php

namespace App\Http\Livewire;

use App\Tag;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TagsToIllustration extends Component
{
    public $tags;
    public $illustration;

    public function mount($tags, $illustration){

        $this->tags = $tags;
        $this->illustration = $illustration;

    }

    public function delete_tag($id){
        DB::table('illustration_tag')->where('tag_id', $id)->delete();

        //return redirect()->route('illustrations.show', $this->illustration->id);
    }

    public function show_tags(){
        $this->tags = $this->illustration->tags;
    }

    public function render()
    {
        return view('livewire.tags-to-illustration');
    }
}

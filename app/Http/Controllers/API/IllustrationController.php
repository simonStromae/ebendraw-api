<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use App\Http\Resources\IllustrationResource;
use App\Illustration;
use App\Tag;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class IllustrationController extends Controller
{
    public function inRandom(int $value = null){

        $illustrations = ((is_null($value)) ? Illustration::take(6) : Illustration::take($value))->inRandomOrder()->get();

        return IllustrationResource::collection($illustrations);
    }

    public function resultSearch(string $searchInput = null){

        $final_result = [];

        /**/
        Collection::macro('illustrations', function(){
            return $this->map(function ($value){
                return $value->illustrations;
            });
        });

        /**/
        $results = Tag::all()->filter(function ($tag) use ($searchInput) {
            return Str::contains(strtolower($tag['name']), strtolower($searchInput));
        })->illustrations();

        /**/
        if (count($results) > 0){
            foreach ($results as $r){
                $result = $r;
            }
            $final_result = IllustrationResource::collection($result);
        }


        return $final_result;
    }
}

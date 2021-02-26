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
    /**
     * Récupération aléatoire d'une collection d'illustrations
     * @param int|null $value
     */
    public function inRandom(int $value = null){

        $illustrations = ((is_null($value)) ? Illustration::take(10) : Illustration::take($value))->inRandomOrder()->get();

        return IllustrationResource::collection($illustrations);
    }

    /**
     * Définition d'une macro pour récupérer une collection d'illustrations
     * Récupération des tags en fonction de $searchInput
     * Récupération d'une collection d'illustrations en fonction des tags récupérer
     * Passage array(array()) -> array()
     * @param string|null $searchInput
     */
    public function resultSearch(string $searchInput = null){

        $final_result = [];

        Collection::macro('illustrations', function(){
            return $this->map(function ($value){
                return $value->illustrations;
            });
        });

        $results = Tag::all()->filter(function ($tag) use ($searchInput) {
            return Str::contains(strtolower($tag['name']), strtolower($searchInput));
        })->illustrations();

        if (count($results) > 0){
            foreach ($results as $r){
                $result = $r;
            }
            $final_result = IllustrationResource::collection($result);
        }

        return $final_result;
    }

}

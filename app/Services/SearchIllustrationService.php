<?php


use App\Tag;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class SearchIllustrationService {

    /**
     * creation méthode illustrations a la collection
     * filtrage des tags en fonction "$searchInput" puis récupération illustrations
     * @param $searchInput
     * @return mixed
     */
    public static function ByTags($searchInput)
    {

        Collection::macro('illustrations', function(){
            return $this->map(function ($value){
               return $value->illustrations;
            });
        });

        return Tag::all()->filter(function ($tag) use ($searchInput) {
           return Str::contains($tag['name'], $searchInput);
        })->illustrations();
    }
}

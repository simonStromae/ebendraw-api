<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class IllustrationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'svg_url' => url($this->svg),
            'updated_at' => $this->updated_at,
            'author' => new UserResource($this->user),
            'tags' => $this->tags
        ];
    }
}

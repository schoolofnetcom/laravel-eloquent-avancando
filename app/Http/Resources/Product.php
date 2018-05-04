<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $deleted = $this->deleted ? 'yes' : 'not';
        return [
            'identify' => $this->id,
            'title' => $this->title,
            'body' => $this->description,
            'activated' => $this->activated,
            'deleted' => $deleted,
            'created' => $this->created_at,
            'updated' => $this->updated_at,
            'links' => [
                'remove'=> '...,',
                'update'=> '...,'
            ]
        ];
    }
}

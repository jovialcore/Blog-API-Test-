<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticlePageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'title' => $this->title,
            'full_text' => $this->full_text,
            'cover' => $this->cover,
            // 'tags' => $this->tags,
            // 'likes' => $this->likes,
            // 'views' => $this->views,
            // 'comments' => $this->comments,
        ];
    }
}

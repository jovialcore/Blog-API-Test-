<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     * 
     * 
     */


    public static $wrap = 'comments';


    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'full_text' => $this->full_text,
            'cover' => $this->cover,
        ];
    }
}

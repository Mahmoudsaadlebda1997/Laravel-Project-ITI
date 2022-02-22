<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [[
            'Post_ID'=>$this->id,
            'Post_Title'=>$this->title,
            'Post_Descripiton'=>$this->description,
            'User'=>new UserResource($this->user)
            ]];
    }
}

<?php

namespace App\Http\Resources;

use App\Helper\ImageHelper;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function createImageUrl($path, $filename)
    {
        return "{$path}{$filename}";
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'image' => $this->createImageUrl($this->path, $this->filename),
            'title' => $this->title,
            'content' => $this->content,
        ];
    }
}

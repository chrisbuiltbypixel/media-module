<?php

namespace Modules\Media\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class MediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        dd($this);
        return [
            'folders' => $this->folders,
            'media' => $this->media,
        ];
    }
}

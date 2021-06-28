<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CvSaveResource extends JsonResource
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

            'status'=>$this->resource['status'],
            'data'=>$this->resource['data'],
            'message'=>$this->resource['message']
        ];
    }
}

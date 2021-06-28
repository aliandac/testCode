<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BidOfCompanyResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.<h1>
     * @param  Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyScoreResource extends JsonResource
{

    private $message='Oylamınız için teşekür ederiz';
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'data'=>$this->resource,
            'status'=>true,
            'message'=>$this->message
        ];
    }
}

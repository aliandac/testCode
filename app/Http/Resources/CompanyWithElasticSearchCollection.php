<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * check active start service elastic search  "sudo service elasticsearch start" command from command prompt
 * check active status service elastic search  "sudo service elasticsearch status" command from command prompt
 * Class CompanyWithElasticSearchCollection
 * @package App\Http\Resources
 */
class CompanyWithElasticSearchCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'detail' => $this->collection,
            'time' => $this->resource['took'],
            'data' => $this->resource['hits']['hits'],
            'total' => $this->resource['hits']['total']['value'],

        ];
    }

}

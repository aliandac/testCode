<?php

namespace App\Services\FullTextSearch;

trait FullTextSearch
{
    public function scopeSearch($query, $term)
    {
        $columns = implode(',',$this->searchable);
        $query->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)" , $term);
        
        return $query;
    }
}